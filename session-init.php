<?php

function start_secure_session($maxLifetime = 1800) {
    if (session_status() === PHP_SESSION_ACTIVE) return true;

    $isSecure = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') || (($_SERVER['HTTP_X_FORWARDED_PROTO'] ?? '') === 'https');

    @ini_set('session.use_strict_mode', '1');
    @ini_set('session.use_only_cookies', '1');
    @ini_set('session.gc_maxlifetime', (string)$maxLifetime);
    if (function_exists('sys_get_temp_dir')) {
        @ini_set('session.save_path', sys_get_temp_dir());
    }

    @session_set_cookie_params([
        'lifetime' => $maxLifetime,
        'path'     => '/',
        'domain'   => '',
        'secure'   => $isSecure,
        'httponly' => true,
        'samesite' => 'Strict',
    ]);
    @session_name('ADINFOTECH_SESSID');

    if (!@session_start()) return false;

    $now = time();
    if (isset($_SESSION['LAST_ACTIVITY']) && ($now - $_SESSION['LAST_ACTIVITY']) > $maxLifetime) {
        destroy_secure_session();
        return start_secure_session($maxLifetime);
    }
    $_SESSION['LAST_ACTIVITY'] = $now;

    if (!isset($_SESSION['CREATED_AT'])) {
        $_SESSION['CREATED_AT'] = $now;
    } elseif (($now - $_SESSION['CREATED_AT']) > 900) {
        @session_regenerate_id(true);
        $_SESSION['CREATED_AT'] = $now;
    }

    return true;
}

function destroy_secure_session() {
    if (session_status() !== PHP_SESSION_ACTIVE) return;
    $_SESSION = [];
    if (ini_get("session.use_cookies")) {
        $p = session_get_cookie_params();
        @setcookie(session_name(), '', time() - 42000, $p["path"], $p["domain"], $p["secure"], $p["httponly"]);
    }
    @session_destroy();
}
