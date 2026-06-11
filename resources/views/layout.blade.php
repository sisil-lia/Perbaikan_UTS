<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Task Manager UTS</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body{
            background: linear-gradient(
                135deg,
                #eef2ff 0%,
                #f8fafc 50%,
                #ffffff 100%
            );
            min-height:100vh;
            font-family:'Segoe UI',sans-serif;
        }

        /* Navbar */
        .navbar{
            background: linear-gradient(
                90deg,
                #2563eb,
                #7c3aed
            );
            box-shadow:0 5px 20px rgba(0,0,0,0.15);
        }

        .navbar-brand{
            font-size:1.5rem;
            font-weight:700;
            letter-spacing:0.5px;
        }

        /* Container */
        .container{
            max-width:1200px;
        }

        /* Card */
        .card{
            border:none;
            border-radius:20px;
            background:#fff;
            box-shadow:0 10px 25px rgba(0,0,0,.08);
            transition:all .3s ease;
        }

        .card:hover{
            transform:translateY(-4px);
            box-shadow:0 15px 30px rgba(0,0,0,.12);
        }

        /* Button */
        .btn{
            border-radius:12px;
            font-weight:600;
        }

        .btn-primary{
            background:#2563eb;
            border:none;
        }

        .btn-primary:hover{
            background:#1d4ed8;
        }

        .btn-success{
            background:#16a34a;
            border:none;
        }

        .btn-success:hover{
            background:#15803d;
        }

        .btn-warning{
            background:#f59e0b;
            border:none;
            color:white;
        }

        .btn-warning:hover{
            background:#d97706;
            color:white;
        }

        .btn-danger{
            background:#dc2626;
            border:none;
        }

        .btn-danger:hover{
            background:#b91c1c;
        }

        /* Table */
        .table{
            background:white;
            border-radius:15px;
            overflow:hidden;
        }

        .table thead{
            background:#f8fafc;
        }

        .table th{
            color:#334155;
            font-weight:600;
        }

        /* Badge */
        .badge{
            padding:8px 12px;
            border-radius:10px;
            font-size:13px;
        }

        /* Heading */
        h1,h2,h3,h4,h5{
            font-weight:700;
            color:#1e293b;
        }

        /* Form */
        .form-control{
            border-radius:12px;
            border:1px solid #dbeafe;
        }

        .form-control:focus{
            border-color:#2563eb;
            box-shadow:0 0 0 0.15rem rgba(37,99,235,.15);
        }

        /* Footer kecil */
        .footer{
            text-align:center;
            margin-top:40px;
            color:#64748b;
            font-size:14px;
        }
    </style>
</head>

<body>

<nav class="navbar navbar-dark py-3">
    <div class="container">

        <span class="navbar-brand">
            📋 Task Manager UTS
        </span>

        <span class="text-white">
            Laravel & SQLite
        </span>

    </div>
</nav>

<div class="container mt-4">

    @yield('content')

    <div class="footer">
        © 2026 - UTS Pemrograman Web II
    </div>

</div>

</body>
</html>