<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $mailData['title'] }}</title>
</head>

<body>
    <div class="item" style="width: 600px; margin: 0 auto; ">
        <div class="utf_post_block_style clearfix">
            <div class="utf_post_thumb"> <a href="#"><img class="img-fluid1" src="#"
                        alt="image" /></a>
            </div>
            <a class="utf_post_cat" href="#">{{ $data->key_word }}</a>
            <div class="utf_post_content">
                <h2 class="utf_post_title1 title-medium"> <a
                        href="{{ route('singleNews', ['id' => $data->id]) }}">{{ $data->title }}</a> </h2>
                <div class="utf_post_meta">
                    <span class="utf_post_date"><i class="fa fa-clock-o"></i>
                        {{ date('d/m/Y', strtotime($data->created_at)) }}</span>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
