<h1>I am your mail</h1>
<h2>{{ $name }}</h2>
<h3>{{ $link }}</h3>

<body>
Here is an image:

<img src="{{ $message->embed($pathToImage) }}">
</body>
