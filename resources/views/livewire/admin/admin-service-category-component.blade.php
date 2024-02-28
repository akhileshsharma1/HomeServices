<div>
    <style>
        nav svg{
            height:20px;
        }
        nav .hidden{
            display: block !important;
        }
        .tablentable-striped{
            color: #fff;
        }
        .container {
    padding: 20px;
}

h1 {
    color: #ffffff; /* White text color */
}

table {
    width: 100%;
    border-collapse: collapse;
}

th, td {
    padding: 10px;
    text-align: left;
}

th {
    background-color: #f2f2f2; /* Light gray background for header */
    color: #333333; /* Dark gray text color */
}


img {
    max-width: 100%;
    height: auto;
}

    </style>
<div class="container">
        <h1>Service Categories list</h1>
        <table class="tablentable-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Slug</th>
                </tr>
            </thead>
            <tbody>
                @foreach($scategories as $scategory)
                <tr>
                    <td>{{$scategory->id}}</td>
                    <td><img src="{{ asset('assets/images/categories')}}/{{$scategory->image}}" width="60" /></td>
                    <td>{{$scategory->name}}</td>
                    <td>{{$scategory->slug}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{$scategories->links()}}
    </div>
</div>
