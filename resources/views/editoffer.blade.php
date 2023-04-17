<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css"
        rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
    body {
        background-color: #dee9ff;
    }

    .registration-form {
        padding: 50px 0;
    }

    .registration-form form {
        background-color: #fff;
        max-width: 600px;
        margin: auto;
        padding: 50px 70px;
        border-top-left-radius: 30px;
        border-top-right-radius: 30px;
        box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.075);
    }

    .registration-form .form-icon {
        text-align: center;
        background-color: #5891ff;
        border-radius: 50%;
        font-size: 40px;
        color: white;
        width: 100px;
        height: 100px;
        margin: auto;
        margin-bottom: 50px;
        line-height: 100px;
    }

    ul li {
        text-decoration: none;
    }

    .registration-form .item {
        border-radius: 20px;
        margin-bottom: 25px;
        padding: 10px 20px;
    }

    .registration-form .create-account {
        border-radius: 30px;
        padding: 10px 20px;
        font-size: 18px;
        font-weight: bold;
        background-color: #5791ff;
        border: none;
        color: white;
        margin-top: 20px;
    }

    .registration-form .social-media {
        max-width: 600px;
        background-color: #fff;
        margin: auto;
        padding: 35px 0;
        text-align: center;
        border-bottom-left-radius: 30px;
        border-bottom-right-radius: 30px;
        color: #9fadca;
        border-top: 1px solid #dee9ff;
        box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.075);
    }

    .registration-form .social-icons {
        margin-top: 30px;
        margin-bottom: 16px;
    }

    .registration-form .social-icons a {
        font-size: 23px;
        margin: 0 3px;
        color: #5691ff;
        border: 1px solid;
        border-radius: 50%;
        width: 45px;
        display: inline-block;
        height: 45px;
        text-align: center;
        background-color: #fff;
        line-height: 45px;
    }

    .registration-form .social-icons a:hover {
        text-decoration: none;
        opacity: 0.6;
    }



    @media (max-width: 576px) {
        .registration-form form {
            padding: 50px 20px;
        }

        .registration-form .form-icon {
            width: 70px;
            height: 70px;
            font-size: 30px;
            line-height: 70px;
        }
    }
    </style>
</head>

<body>
    <div class="registration-form">
        @foreach($offers as $offer)
        <form action="/updateoffer/{{$offer->id}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="form-label">Name</label>
                <input type="text" value="{{$offer->name}}" class="form-control item" name="name">
            </div>
            <div class="form-group">
                <label class="form-label">Description</label>
                <textarea class="form-control" id="body" name="description" required>{{$offer->description}}</textarea>
            </div>
            <div class="form-group">
                <label class="form-label">Duration</label>
                <select id="type_input"  name="duration" class="options">
                    <option value="{{$offer->duration}}" selected>
                    </option>
                    <option value="Month">Month</option>
                    <option value="Year">Year</option>
                </select>
            </div>
            <div class="form-group">
                <label class="form-label">Price</label>
                <input name="price" type="number" value="{{$offer->price}}" class="form-control" id="body" required>
            </div>
            <div class="form-group">
                <label for="body" class="form-label">Categories</label>
                <ul>
                    @foreach($catoffers as $catoffer)
                    <li>
                        <input type="radio" id="checkbox-1" name="category" value="{{$catoffer->name}}">
                        <label>{{$catoffer->name}}</label>
                    </li>
                    @endforeach
                </ul>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-block create-account">Update</button>
            </div>
        </form>
        @endforeach

    </div>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js">
    </script>
    <script src="assets/js/script.js"></script>
</body>

</html>