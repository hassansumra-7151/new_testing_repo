<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>
    Argon Dashboard - Free Dashboard for Bootstrap 4 by Creative Tim
  </title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css" rel="stylesheet">
  <!-- Favicon -->
  <link href="{{asset('assets/img/brand/favicon.png')}}" rel="icon" type="image/png">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <link href="{{asset('assets/js/plugins/nucleo/css/nucleo.css')}}" rel="stylesheet" />
  <link href="{{asset('assets/js/plugins/@fortawesome/fontawesome-free/css/all.min.css')}}" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="{{asset('assets/css/argon-dashboard.css?v=1.1.2')}}" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">

    <style>
    /* Style the container (the outer div) */
    .switch {
        position: relative;
        display: inline-block;
        width: 60px;
        height: 34px;
    }

    /* Hide the default checkbox */
    .switch input {
        opacity: 0;
        width: 0;
        height: 0;
    }

    /* Style the slider (the round part inside the container) */
    .slider {
        position: absolute;
        cursor: pointer;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: #ccc;
        -webkit-transition: .4s;
        transition: .4s;
    }

    /* Style the round part inside the slider to make it look like a button */
    .slider.round {
        border-radius: 34px;
    }

    /* When the checkbox is checked, change the background color of the slider */
    .slider.round:before {
      border-radius: 25px;
        position: absolute;
        content: "";
        height: 26px;
        width: 26px;
        left: 4px;
        bottom: 4px;
        background-color: white;
        -webkit-transition: .4s;
        transition: .4s;
    }

    /* When the checkbox is checked, move the slider to the right */
    input:checked + .slider {
        background-color: #2196F3;
    }

    /* When the checkbox is checked, move the round button to the right */
    input:checked + .slider:before {
        -webkit-transform: translateX(26px);
        -ms-transform: translateX(26px);
        transform: translateX(26px);
    }
    /* Add this to your CSS stylesheet */
.navbar-nav .nav-item.active {
    background-color:#FFCC00; /* Background color for the active item */
}

.navbar-nav .nav-link.active {
    color: #fff; /* Text color for the active item */
}
  @keyframes vibrate {
            0% { transform: translateX(0); }
            10% { transform: translateX(-5px); }
            20% { transform: translateX(5px); }
            30% { transform: translateX(-5px); }
            40% { transform: translateX(5px); }
            50% { transform: translateX(0); }
            100% { transform: translateX(0); }
        }

        .sidebar {
            background-color: #333; /* Sidebar background color */
            width: 200px;
            height: 100%; /* Adjust the height as needed */
            position: fixed;
            left: 0;
            top: 0;
            overflow: hidden;
            animation: vibrate 0.3s infinite; /* Adjust the duration and strength as needed */
        }

        .nav-item {
            padding: 10px;
        }

     .card {
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 20px;
           /* width: 300px;*/
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin: 10px;
            transition: box-shadow 0.3s;
        }
        .card-title {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 10px;
        }
        .card-content {
            font-size: 14px;
        }
        .card-image {
            max-width: 100%;
            height: auto;
            margin-bottom: 10px;
            transition: transform 0.5s;
        }
        .card-button {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
        }
        .card:hover {
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }
        .card:hover .card-button {
            background-color: #0056b3;
        }
        .card .card-image:hover {
            transform: scale(1.1);
        }
        .product-image {
    width: 100%;
    height: 200px;
    object-fit: cover; 
    transition: transform 0.2s; 
}

.product-image:hover {
    transform: scale(1.1);
}
</style>
</head>