<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <div>
            <b>You have been added as a client by {{ $advisor }}</b>
            <br/>
            <a href="{{ URL::to('questioner/' . $code) }}">Click Here</a> to complete your questioner.
            <br/>
            A report will be displayed after the completion of questioner.
        </div>

    </body>
</html>
