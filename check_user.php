<?php
require 'vendor/autoload.php';
$app = require 'bootstrap/app.php';

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

$user = User::where('email', 'admin@example.com')->first();

if ($user) {
    echo "✓ User ditemukan!\n";
    echo "Name: " . $user->name . "\n";
    echo "Email: " . $user->email . "\n";
    echo "Password hash: " . substr($user->password, 0, 20) . "...\n\n";
    
    // Test password verification
    $testPassword = 'password123';
    if (Hash::check($testPassword, $user->password)) {
        echo "✓ Password 'password123' COCOK dengan hash di database!\n";
    } else {
        echo "✗ Password 'password123' TIDAK cocok dengan hash di database\n";
    }
} else {
    echo "✗ User admin@example.com tidak ditemukan di database\n";
    echo "\nDaftar semua user:\n";
    $allUsers = User::all();
    foreach ($allUsers as $u) {
        echo "- " . $u->email . " (" . $u->name . ")\n";
    }
}
?>
