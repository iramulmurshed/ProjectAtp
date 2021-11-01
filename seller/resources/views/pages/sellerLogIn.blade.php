@extends('layout.outsideApp')
@section('content')

<form>
    <table>


        <tr>
            <td>Email:</td>
            <td><input type="text" name="s_email"></td>
        </tr>


        <td>Password:</td>
        <td><input type="password" name="Password"></td>
        </tr>


        <tr>
            <td><input type="submit" value="Login"> 
        </tr>
        </table>

        </form>


@endsection