<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mobile Entries</title>
</head>
<body>
   @if ($errors->any())
        @foreach ($errors->all() as $error)
            <p style="color:red;">{{ $error }}</p>
        @endforeach
   @endif

   @if (session('success'))
        <p style="color:blue">{{ session('success') }}</p>
   @endif

   <h1>Mobile Entries</h1>
   <form action="{{ route('mobile-entries.store') }}" method="POST">
    @csrf
    <label for="mobile_number">Mobile Number:</label>
    <input type="text" name="mobile_number" id="mobile_number" required>
    <button type="submit">Add</button>
</form>

   <h2>Existing Entries</h2>
   <ul>
        @foreach($mobileEntries as $entry)
            <li>{{ $entry->mobile_number }}</li>
        @endforeach
   </ul>
</body>
</html>
