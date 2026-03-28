<!DOCTYPE html>
<html>
<head>
    <title>Sinyal Masuk: Open Comms</title>
</head>
<body style="font-family: Arial, sans-serif; line-height: 1.6; color: #333;">
    <h2>Pesan Baru dari Halaman Portofolio</h2>
    <p><strong>Pilot/Pengirim:</strong> {{ $data['name'] }}</p>
    <p><strong>Frekuensi Digital/Email:</strong> {{ $data['email'] }}</p>
    <hr style="border: none; border-top: 1px solid #eee;">
    <p><strong>Isi Pesan / Signal Payload:</strong></p>
    <p style="background: #f9f9f9; padding: 15px; border-left: 4px solid #06b6d4;">
        {{ nl2br(e($data['message'])) }}
    </p>
</body>
</html>
