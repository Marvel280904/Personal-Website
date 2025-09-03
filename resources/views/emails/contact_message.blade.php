<!doctype html>
<html>
  <body style="font-family:ui-sans-serif,system-ui,-apple-system,Segoe UI,Roboto,Helvetica,Arial;">
    <h2 style="margin:0 0 8px;">New Contact Message</h2>
    <p style="margin:0 0 6px;"><strong>Name:</strong> {{ $name }}</p>
    <p style="margin:0 0 6px;"><strong>Email:</strong> {{ $email }}</p>
    <p style="margin:0 0 6px;"><strong>Subject:</strong> {{ $subject }}</p>
    <hr style="border:none;border-top:1px solid #e5e7eb;margin:12px 0;">
    {{-- pakai nama variabel baru & aman dari XSS + newline --}}
    <p style="white-space:pre-wrap;line-height:1.6;">{!! nl2br(e($userMessage)) !!}</p>
  </body>
</html>
