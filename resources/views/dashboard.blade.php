<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="container">
        <h1>Dashboard</h1>
        <ul>
            <li><a href="{{ route('taken.index') }}" class="btn">Mijn Taken</a></li>
            <li><a href="{{ route('profile.edit') }}" class="btn">Mijn Profiel</a></li>
            <li>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="btn">Uitloggen</button>
                </form>
            </li>
        </ul>
    </div>
</body>
</html>
