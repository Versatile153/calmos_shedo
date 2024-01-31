@extends('dashboard.app1')

@section('content')

                <div class="records table-responsive">

                    <div class="record-header">
                        <div class="add">
                            <span>Entries</span>
                            <select name="" id="">
                                <option value="">ID</option>
                            </select>
                            <button>user deposits</button>
                        </div>

                        <div class="browse">
                           <input type="search" placeholder="Search" class="record-search">
                            <select name="" id="">
                                <option value="">Status</option>
                            </select>
                        </div>
                    </div>

                    <div>

                        @foreach ($usersWithDeposits as $userData)
                        @foreach ($userData['deposits'] as $deposit)

                        <table width="100%">
                            <thead>
                                <tr>
                                    {{-- <th>#</th>
                                    <th><span class="las la-sort"></span> CLIENT</th>
                                    <th><span class="las la-sort"></span> TOTAL</th>
                                    <th><span class="las la-sort"></span> ISSUED DATE</th>
                                    <th><span class="las la-sort"></span> BALANCE</th>
                                    <th><span class="las la-sort"></span> ACTIONS</th> --}}
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{ $userData['user']->id }}</td>
                                    <td>
                                        <div class="client">
                                           <div class="client-img bg-img" style="background-image: url(img/3.jpeg)"></div>
                                            <div class="client-info">
                                                <h4>{{ $userData['user']->name }}</h4>
                                                <small>{{ $userData['user']->email }}</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        {{ $deposit->amount }}
                                    </td>
                                    <td>
                                        {{ $deposit->created_at->format('F j, Y') }}

                                    </td>
                                    <td>
                                        {{ $deposit->status }}

                                    </td>
                                    <td>
                                        <div class="actions">


                                            <form method="POST" action="{{ route('update.deposit.status1', ['id' => $deposit->id]) }}">
                                                @csrf

                                                <button type="submit" title="Reject" class="modal-action" id="rejectAction">
                                                    @if ($deposit->status == 'pending')
                                                        <span class="las la-check"></span>
                                                    @elseif ($deposit->status == 'approved')
                                                        <span class="las la-times"></span>
                                                    @endif
                                                </button>
                                            </form>


{{--
                                            <form method="POST" action="{{ route('update.deposit.status1', ['id' => $deposit->id]) }}">
                                                @csrf
                                                <button type="submit" title="reject" class="modal-action" id="rejectAction">
                                                    <span class="las la-times"></span>
                                                </button>
                                            </form> --}}


                                        </div>
                                    </td>
                                </tr>


                            </tbody>
                        </table>

@endforeach
@endforeach


                    </div>

                </div>

            </div>





@endsection
