<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        .im { color: #000E45; !important;}
        ul li { color: #000E45; !important;}
    </style>
</head>
<body>
<a href="https://inclassica.com/" target="_blank" style="width: 20%; margin: auto; display: block; margin-bottom: 5%;">
    <img style="width: 100%" src="https://inclassica.com/media/images/InClassicaColorLogo.png" alt="InClassica Website Logo">
</a>
<h2 style="font-family: 'Hind Siliguri', sans-serif;
    margin: auto; font-weight: 700; width: max-content; color: #000E45; text-transform: uppercase; font-size: 4vw;">Press Accreditation Request</h2>
<div style="width: 100%; height: 2px; background: linear-gradient(90deg,#3DBDEE,#A75CA6 50%,#F59221); margin: 5% 0;"></div>
<ul style="font-family: 'Hind Siliguri', sans-serif;
    color: #000E45; list-style-type: none;">
    <li><p><strong>Name (First, Last) : </strong> {{$data['name'] ?? "-"}}</p></li>
    <li><p><strong>Title : </strong>{{$data['title'] ?? "-"}}</p></li>
    <li><p><strong>Email : </strong>{{$data['email'] ?? "-"}}</p></li>
    <li><p><strong>Date of birth : </strong> {{$data['birth_date'] ?? "-"}}</p></li>
    <li><p><strong>Citizenship : </strong> {{$data['citizenship'] ?? "-"}}</p></li>
    <li><p><strong>Country : </strong> {{$data['country'] ?? "-"}}</p></li>
    <li><p><strong>Home Phone : </strong> {{$data['home_phone'] ?? "-"}}</p></li>
    <li><p><strong>Cell : </strong> {{$data['cell'] ?? "-"}}</p></li>
    <li><p><strong>Name of organization : </strong> {{$data['name_of_organization'] ?? "-"}}</p></li>
    <li><p><strong>Position : </strong> {{$data['position'] ?? "-"}}</p></li>
    <li><p><strong>Type of medium : </strong> {{$data['type_of_medium'] ?? "-"}}</p></li>
    <li><p><strong>Web address : </strong> {{$data['web_address'] ?? "-"}}</p></li>
    <li><p><strong>Address : </strong> {{$data['address'] ?? "-"}}</p></li>
    <li><p><strong>Apt : </strong> {{$data['apt'] ?? "-"}}</p></li>
    <li><p><strong>City : </strong> {{$data['city'] ?? "-"}}</p></li>
    <li><p><strong>State : </strong> {{$data['state'] ?? "-"}}</p></li>
    <li><p><strong>Zip : </strong> {{$data['zip'] ?? "-"}}</p></li>
    <li><p><strong>Organization Country : </strong> {{$data['org_country'] ?? "-"}}</p></li>
    <li><p><strong>Organization Phone : </strong> {{$data['org_phone'] ?? "-"}}</p></li>
    <li><p><strong>Ex. : </strong> {{$data['ex'] ?? "-"}}</p></li>
    <li><p><strong>Chief editor name : </strong> {{$data['chief_editor_name'] ?? "-"}}</p></li>
    <li><p><strong>Chief editor phone : </strong> {{$data['chief_editor_phone'] ?? "-"}}</p></li>
    <li><p><strong>Chief editor email : </strong> {{$data['chief_editor_email'] ?? "-"}}</p></li>
</ul>
</body>
</html>