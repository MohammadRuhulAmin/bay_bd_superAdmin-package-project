@extends('SuperAdmin::superAdmin.Template.template')


@section('content')
    <div class="jumbotron">
        <h3>Edit Expence</h3>
    </div>
    <form action="{{route('expence.update',$expence->id)}}" method="post">
        @csrf
        <div class="jumbotron">
            <table class="table table-striped">
                <tr>
                    <td>Sector</td>
                    <td><input type="text" value={{$expence->sector}} class="form-control" name="sector"></td>
                </tr>
                <tr>
                    <td>Amount</td>
                    <td><input type="text" value={{$expence->amount}} class="form-control" name="amount"></td>
                </tr>
                <tr>
                    <td>date</td>
                    <td><input type="date" value={{$expence->date}} class="form-control" name="date"></td>
                </tr>
                <tr>
                    <td>Month</td>
                    <td>
                        <select name="month" class="form-control">
                            <option>January</option>
                            <option>February</option>
                            <option>March</option>
                            <option>April</option>
                            <option>May</option>
                            <option>June</option>
                            <option>July</option>
                            <option>August</option>
                            <option>September</option>
                            <option>Ouctobar</option>
                            <option>November</option>
                            <option>December</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Year</td>
                    <td><input value={{$expence->year}} type="text" class="form-control" name="year"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" class="btn btn-success" ></td>
                </tr>
            </table>
    
        </div>
    </form>

@endsection
