@extends('admin.layout')
@section('content')
<main id="main" class="main">

    <div class="pagetitle">
      <h1 class="segoui text-center">Carousels Items</h1>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card" style="">
                    <div class="card-body">
                        <ul class="nav nav-tabs nav-tabs-bordered">
                            <li class="nav-item">
                                <button class="nav-link active segoui text-center" data-bs-toggle="tab"
                                    data-bs-target="#profile-overview" style="margin-bottom: 10px">Carousels</button>
                            </li>
                        </ul>
                        <!-- start of reservations table -->
                        <table class="table table-bordered">
                            <thead class="table-primary">
                                <tr>
                                    <th scope="col" class="segoui text-center">ID</th>
                                    <th scope="col" class="segoui text-center">Image Path</th>
                                    <th scope="col" class="segoui text-center">Title</th>
                                    <th scope="col" class="segoui text-center">Title Color</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($carousels as $ca)


                                <tr>
                                    <th scope="row"><a href="#" ></a>{{ $ca->id }}</th>
                                    <td class="segoui text-center" dir="ltr">{{ $ca->image }}</td>
                                    <td class="segoui text-center" dir="ltr">{{ $ca->title }}</td>
                                    <td class="segoui text-center" dir="ltr">{{ $ca->title_color }}</td>

                                    <td><form action="#" method="post">@csrf<button type="submit" class="btn btn-danger segoui text-center">Edit</button></form></td>
                                </tr>

                                   @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main><!-- End #main -->
@endsection
