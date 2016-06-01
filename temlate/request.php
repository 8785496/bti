<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Кадастровые работы - Узнать стоимость работ</title>
        <link rel="shortcut icon" type="image/x-icon" href="/land_surveying.ico">
        <!-- Bootstrap Core CSS -->
        <link href="/css/bootstrap.min.css" rel="stylesheet">
        <!-- Custom Fonts -->
        <link href="/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <!-- Custom CSS -->
        <link rel="stylesheet" href="/css/patros.css" >
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body data-spy="scroll">
        <?php include __DIR__ . '/metrika.php' ?>
        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/">
                        <!--<img src="images/logo.png" alt="company logo" />-->
                        <span style="color: white">
                            Кадастровый инженер<br>
                            г. Новосибирск, тел. 213-63-40
                        </span>
                    </a>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right custom-menu">
                        <li><a href="/#home">Главная</a></li>
                        <li><a href="/#about">Преимущества</a></li>
                        <li><a href="/#services">Услуги</a></li>
                        <li><a href="/#portfolio1">Примеры работ</a></li>
                        <li><a href="/#contact">Контакты</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Отправить заявку -->
        <section id="contact">
            <div class="container"> 
                <br>
                <div class="row">
                    <div class="col-md-12">
                        <div class="text-center color-elements">
                            <h2>Узнать стоимость работ</h2>
                            <h5>При оформлении заявки через сайт <strong>скидка 10%</strong></h5>
                            <h4>
                                Стоимость стандартных видов работ в разделе
                                <a href="/#services" class="link"><strong>Услуги</strong></a>
                            </h4>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-lg-12">
                        <form action="/php/send_request.php" id="requestForm" class="form-horizontal" id="" method="post" enctype="multipart/form-data">
                            <!--Цель работ-->
                            <div class="form-group">
                                <!--технический план, межевой план, , план объкта-->
                                <label for="target" class="col-sm-4 control-label">Цель работ</label>
                                <div class="col-sm-4">
                                    <?php printRButton('Технический план') ?>
                                    <?php printRButton('Акт обследования') ?>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="target" value="Вынос границ земельного участка">
                                            Вынос границ земельного участка
                                        </label>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <?php printRButton('Межевой план') ?>
                                    <?php printRButton('План объкта') ?>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="target" value="Другое">
                                            Другое
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <!--Фамилия Имя Отчество-->
                            <div class="form-group">
                                <label for="name" class="col-sm-4 control-label">Фамилия Имя Отчество *</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control custom-labels" id="name" name="name" maxlength="64">
                                </div>
                            </div>
                            <!--email-->
                            <div class="form-group">
                                <label for="email" class="col-sm-4 control-label">E-mail</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control custom-labels" id="email" name="email" maxlength="64">
                                </div>
                            </div>
                            <!--Телефон-->
                            <div class="form-group">
                                <label for="phone" class="col-sm-4 control-label">Телефон</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control custom-labels" id="phone" name="phone" maxlength="32">
                                </div>
                            </div>
                            <!--Вид объекта-->
                            <div class="form-group">
                                <label for="typeObject" class="col-sm-4 control-label">Вид объекта</label>
                                <div class="col-sm-4">
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="typeObject" value="Жилой дом">
                                            Жилой дом
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="typeObject" value="Квартира">
                                            Квартира
                                        </label>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="typeObject" value="Гараж">
                                            Гараж
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="typeObject" value="Земельный участок">
                                            Земельный участок
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="typeObject" value="Другое">
                                            Другое
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <!--Вид работ-->
                            <div class="form-group">
                                <label for="typeWork" class="col-sm-4 control-label">Вид работ</label>
                                <div class="col-sm-4">
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="typeWork" value="Постановка на кадастровый учет">
                                            Постановка на кадастровый учет
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="typeWork" value="Внесение изменений">
                                            Внесение изменений
                                        </label>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="typeWork" value="Снятие с кадастрового учета">
                                            Снятие с кадастрового учета
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="typeWork" value="Другое">
                                            Другое
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <!--дополнительные параметры-->
                            <div class="form-group">
                                <div class="col-sm-offset-4 col-sm-8">
                                    <a class="link" role="button" data-toggle="collapse" href="#extraOtions" aria-expanded="false" aria-controls="extraOtions">
                                        Показать/скрыть дополнительные параметры
                                    </a>
                                </div>
                            </div>
                            <div class="collapse" id="extraOtions">
                                <!--Адрес (местонахождение)-->
                                <div class="form-group">
                                    <label for="adress" class="col-sm-4 control-label">Адрес (местонахождение)</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control custom-labels" id="adress" name="adress" maxlength="64">
                                    </div>
                                </div>
                                <!--Площадь (длина)-->
                                <div class="form-group">
                                    <label for="size" class="col-sm-4 control-label">Площадь (длина)</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control custom-labels" id="size" name="size" maxlength="32">
                                    </div>
                                </div>
                                <!--Описание-->
                                <div class="form-group">
                                    <label for="description" class="col-sm-4 control-label">Описание</label>
                                    <div class="col-sm-8">
                                        <textarea class="form-control custom-labels" id="description" name="description" maxlength="1024"></textarea>
                                    </div>
                                </div>
                                <!--Прилагаемые документы-->
                                <!--<div class="form-group">
                                    <label class="col-sm-4 control-label">Прилагаемые документы</label>
                                    <div class="col-sm-8" id="file-list">
                                        <div class="form-group">
                                            <div class="col-sm-9">
                                                <input type="file" class="form-control custom-labels" name="attach_0" id="">
                                            </div>
                                            <div class="col-sm-3">
                                                <button class="btn btn-md btn-custom btn-noborder-radius add-file">Добавить</button>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                            <div class="form-group">
                                <div class="col-sm-4"></div>
                                <div class="col-sm-offset-4 col-sm-4 height-contact-element">
                                    <input type="submit" class="btn btn-md btn-custom btn-noborder-radius" value="Запросить стоимость" id="send"/>
                                </div>
                                <div class="col-sm-4">
                                    <div id="success" style="margin-top: 30px"></div>
                                </div>
                            </div>
<!--                            <div class="col-sm-12 contact-msg">
                                
                            </div>-->
                        </form>    
                    </div>
                </div>
            </div>
        </section>

        <!-- Подпишитесь на нас -->
        <section id="follow-us">
            <div class="container"> 
                <div class="text-center height-contact-element">
                    <h2>Подпишитесь на нас</h2>
                </div>
                <img class="img-responsive displayed" src="/images/short.png" alt="short" />
                <div class="text-center height-contact-element">
                    <ul class="list-unstyled list-inline list-social-icons">
                        <li class="active"><a href="http://vk.com/kadastr_nsk"><i class="fa fa-vk social-icons"></i></a></li>
                        <li class="active"><a href="https://plus.google.com/+2136340Xyz"><i class="fa fa-google-plus social-icons"></i></a></li>
                    </ul>
                </div>
            </div>
        </section>

        <footer id="footer">
            <div class="container">
                <div class="row myfooter">
                    <div class="col-sm-6"><div class="pull-left">
                            &copy; 2136340.xyz 2016
                        </div></div>
                    <div class="col-sm-6">
                        <div class="pull-right">Designed by <a href="http://www.atis.al">ATIS</a></div>
                    </div>
                </div>
            </div>
        </footer>

        <!-- jQuery -->
        <script src="/js/jquery.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="/js/bootstrap.min.js"></script>
        <!-- Add File -->
        <script>
            $(document).ready(function () {
                var removeItem = function (e) {
                    e.preventDefault();
                    $(this).parents('div.form-group')[0].remove();
                };

                var count = 0;

                var addItem = function (e) {
                    e.preventDefault();
                    if ($('#file-list > div').length >= 3) {
                        return;
                    }

                    count++;
                    $('#file-list').append('<div class="form-group">' +
                            '<div class="col-sm-9">' +
                            '<input type="file" class="form-control custom-labels" name="attach_' + count + '">' +
                            '</div>' +
                            '<div class="col-sm-3">' +
                            '<button class="btn btn-md btn-custom btn-noborder-radius add-file" href="">Добавить</button>' +
                            '</div>' +
                            '</div>');
                    var _this = $(this);
                    _this.unbind('click', addItem);
                    _this.removeClass('add-file');
                    _this.text('Удалить');
                    _this.click(removeItem);
                    $('.add-file').click(addItem);
                };

                $('.add-file').click(addItem);
            });
        </script>
        <!-- Send Request -->
        <script type="text/javascript">
            $(document).ready(function () {
                $('#requestForm').submit(function (e) {
                    e.preventDefault();
                    e.stopPropagation();
                    // get values from FORM
                    var name = $("#name").val();
                    var phone = $("#phone").val();
                    var email = $("#email").val();
                    var goodToGo = false;
                    var messgaeError = 'Заявка не может быть отправлена.';

                    if (name && name.length === 0 || $.trim(name) === '') {
                        messgaeError = 'Чтобы продолжить, заполните поле Фамилия Имя Отчество!';
                    } else if ((phone && phone.length === 0 || $.trim(phone) === '') &&
                            (phone && email.length === 0 || $.trim(email) === '')) {
                        messgaeError = 'Чтобы продолжить, заполните поле Email или Телефон!';
                    } else {
                        goodToGo = true;
                    }
                    var formData = new FormData($(this)[0]);
                    if (goodToGo) {
                        $.ajax({
                            cache: false,
                            contentType: false,
                            processData: false,
                            beforeSend: function () {
                                $('#success').html('<div class="col-md-12 text-center"><img src="/images/spinner1.gif" alt="spinner" /></div>');
                                $('#send').prop("disabled", true);
                            },
                            success: function (response) {
                                if (response == 1) {
                                    $('#success').html('<div class="col-md-12 text-center">Ваш запрос успешно отправлен.</div>');
                                } else {
                                    $('#success').html('<div class="col-md-12 text-center">Запрос не был отправлен. Пожалуйста, попробуйте еще раз!</div>');
                                    $('#send').prop("disabled", false);
                                }
                            },
                            error: function (e) {
                                $('#success').html('<div class="col-md-12 text-center">Не возможно отправить данные на сервер. Пожалуйста, попробуйте позже.</div>');
                                $('#send').prop("disabled", false);
                            },
                            data: formData,
                            type: 'POST',
                            url: '/php/send_request.php'
                        });
                        return true;
                    } else {
                        $('#success').html('<div class="col-md-12 text-center">' + messgaeError + '</div>');
                        return false;
                    }
                    return false;
                });
            });
        </script>
    </body>
</html>
