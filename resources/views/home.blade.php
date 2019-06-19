@extends('layouts.master')
<body style="background-image:url(images/backhome.jpg);">
@section('content')
<a class=" btn btn-primary homebtn firstbtn" href="/issueBooks" role="button">Issue Book</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<a class="btn btn-primary homebtn" href="/addBooks" role="button">Add Book</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<a class="btn btn-primary homebtn" href="/addCategories" role="button">Add Category</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<a class="btn btn-primary homebtn" href="/addMembers" role="button">Add Member</a>
<a class="btn btn-primary homebtn firstbtn" href="/returnBooks" role="button">Return Books</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<a class="btn btn-primary homebtn" href="/booksList" role="button">Books List</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<a class="btn btn-primary homebtn" href="/membersList" role="button">Members List</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<a class="btn btn-primary homebtn" href="/issuedBooks" role="button">Issued Books</a>
<h4 style="margin-left:85em; color:#ffff;">Manish Bhattarai</h4>
<h4 style="margin-left:85em; color:#ffff;">Nirvik Kc</h4>
<h4 style="margin-left:85em; color:#ffff;">Safal Mahat</h4>
<h4 style="margin-left:85em; color:#ffff;">Saugat Tiwari</h4>
@endsection
</body>
