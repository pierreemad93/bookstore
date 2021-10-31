<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Neon Admin Panel" />
    <meta name="author" content="Laborator.co" />
    <link rel="icon" href="adminpanel/assets/images/favicon.ico">
    <title>Neon | Blank Page</title>
    <link rel="stylesheet" href="adminpanel/assets/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css"
        id="style-resource-1">
    <link rel="stylesheet" href="adminpanel/assets/css/font-icons/entypo/css/entypo.css" id="style-resource-2">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic"
        id="style-resource-3">
    <link rel="stylesheet" href="adminpanel/assets/css/bootstrap.css" id="style-resource-4">
    <link rel="stylesheet" href="adminpanel/assets/css/neon-core.css" id="style-resource-5">
    <link rel="stylesheet" href="adminpanel/assets/css/neon-theme.css" id="style-resource-6">
    <link rel="stylesheet" href="adminpanel/assets/css/neon-forms.css" id="style-resource-7">
    <link rel="stylesheet" href="adminpanel/assets/css/custom.css" id="style-resource-8">
    <script src="adminpanel/assets/js/jquery-1.11.3.min.js"></script>
</head>
<body>
    <div class="page-container">
        @include('includes.sidebar')
        <div class="main-content">
           @yield('content')
            <!-- Footer -->
            @include('includes.footer')
        </div>
    </div>
    @include('includes.scripts')
    @yield('customScript')
</body>
</html>
<!-- Localized -->
