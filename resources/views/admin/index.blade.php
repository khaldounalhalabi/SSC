@extends('admin.layout')
@section('content')
<section class="section dashboard">
    <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-8">
            <div class="row">
                <!-- Sales Card -->
                <div class="col-xxl-4 col-md-6">
                    <div class="card info-card sales-card">
                        <div class="card-body">
                            <h5 class="card-title">Newsletter <span>| Subscribers</span></h5>

                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-subtract"></i>
                                </div>
                                <div class="ps-3">
                                    <h6>{{ $subscribers }}</h6>
                                </div>
                            </div>
                        </div>

                    </div>
                </div><!-- End Sales Card -->

                <!-- Revenue Card -->
                <div class="col-xxl-4 col-md-6">
                    <div class="card info-card revenue-card">
                        <div class="card-body">
                            <h5 class="card-title">Emails <span>| Today</span></h5>

                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-envelope"></i>
                                </div>
                                <div class="ps-3">
                                    <h6>{{$recieved_emails_today}}</h6>
                                </div>
                            </div>
                        </div>

                    </div>
                </div><!-- End Revenue Card -->

                <!-- Notifications -->
                <div class="col-12">
                    <div class="card top-selling overflow-auto">
                        <div class="card-body pb-0">
                            <h5 class="card-title">Unread Messages</h5>
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th scope="col">Name</th>
                                        <th scope="col">Subject</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Date</th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($notifications as $not)
                                    <tr>
                                        <th scope="row">{{ $not->data['name'] }}</th>
                                        <td>{{ $not->data['subject'] }}</td>
                                        <td>{{ $not->data['email'] }}</td>
                                        <td class="fw-bold">{{ $not->data['date'] }}</td>
                                        <td><a href="{{ route('admin.email.from.notification' , ['emailId' => $not->data['email_id'] , 'notificationId' => $not->id]) }}" class="text-primary fw-bold"><button class="btn btn-primary">Show</button></a></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div><!-- End Notifications -->
            </div>
        </div>
        {{-- End Of Left Side Columns --}}

        <!-- Right side columns -->
        <div class="col-lg-4">
            <div class="col-xxl-4 col-md-6" style="width: 100%">
                <div class="card info-card customers-card">
                    <div class="card-body">
                        <h5 class="card-title">Total Visitors</span></h5>

                        <div class="d-flex align-items-center">
                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                <i class="bi bi-view-list"></i>
                            </div>
                            <div class="ps-3">
                                <h6>{{ $visitors }}</h6>
                            </div>
                        </div>
                    </div>

                </div>
            </div><!-- End Revenue Card -->

            <div class="col-12">
                <div class="card info-card sales-card">
                    <div class="card-body">
                        <h5 class="card-title">Date <span>| time</span></h5>

                        <div class="d-flex align-items-center">
                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                <i class="bi bi-alarm"></i>
                            </div>
                            <div class="ps-3">
                                <h6 dir="rtl" id="time">
                                    {{-- Setting realtime clock --}}
                                    <script>
                                        `use strict`;

                                        function refreshTime() {
                                            const timeDisplay = document.getElementById("time");
                                            const dateString = new Date().toLocaleString();
                                            const formattedString = dateString.replace(", ", " - ");
                                            timeDisplay.textContent = formattedString;
                                        }
                                        setInterval(refreshTime, 1000);
                                    </script>
                                    {{-- end setting realtime clock --}}
                                </h6>
                            </div>
                        </div>
                    </div>

                </div>
            </div><!-- End Sales Card -->

        </div>

    </div>
</section>
@endsection
