<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $mailData['title'] }}</title>
    <link rel="stylesheet" href="{{ asset('email/css/style.css')}}">
</head>

<body>
    {{-- <div class="item" style="width: 600px; margin: 0 auto; ">
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
    </div> --}}
    <td class="esd-structure es-p40t es-p40b es-p10r es-p10l es-struct-amp" align="left">
        <table cellpadding="0" cellspacing="0" width="100%">
            <tbody>
                <tr>
                    <td width="580" align="center" class="esd-container-frame">
                        <table cellpadding="0" cellspacing="0" width="100%" bgcolor="#ffffff" style="border-left:1px solid #e1effc;border-right:1px solid #e1effc;border-top:1px solid #e1effc;border-bottom:1px solid #e1effc;background-color: #ffffff; border-radius: 12px; border-collapse: separate;box-shadow: 0 20px 20px #cccccc;">
                            <tbody>
                                <tr>
                                    <td align="left" class="esd-block-text es-m-txt-l es-p30t es-p30r es-p30l">
                                        <h2>Hot news just posted a new news</h2>
                                    </td>
                                </tr>
                                <tr>
                                    <td align="left" class="esd-block-text es-p15t es-p30r es-p30l">
                                        <p><br>{{ $data->title }}<br></p>
                                        <p>{{ date('d/m/Y', strtotime($data->created_at)) }}</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td align="left" class="esd-block-button es-p25t es-p30b es-p30r es-p30l">
                                        <!--[if mso]><a href="https://viewstripo.email/" target="_blank">
        <v:roundrect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" esdevVmlButton href="https://viewstripo.email/" 
                    style="height:48px;v-text-anchor:middle;width:236px;" arcsize="25%" strokecolor="#2f80ed" strokeweight="2px" fillcolor="#e1effc">
            <w:anchorlock></w:anchorlock>
            <center style='color:#2f80ed;font-family:roboto, "helvetica neue", helvetica, arial, sans-serif;font-size:16px;font-weight:400;'>Back To Training!</center>
        </v:roundrect></a>
    <![endif]-->
                                        <!--[if !mso]><!-- --><span class="msohide es-button-border"><a href="{{ route('singleNews', ['id' => $data ->id])}}" class="es-button" target="_blank">Back To Training!</a></span>
                                        <!--<![endif]-->
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
    </td>
</body>

</html>


