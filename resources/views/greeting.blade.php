<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Greeting</h1>
    <?php if($errors->any()): ?>
        <?php foreach($errors->all() as $error): ?>
            <p style="color: red;"><?php echo $error; ?></p>
        <?php endforeach; ?>
    <?php endif; ?>
    <form action="{{ route('welcome') }}" method="post">
        @csrf
        <input type="text" name="username">
        <input type="submit" value="送信">
    </form>
</body>
</html>