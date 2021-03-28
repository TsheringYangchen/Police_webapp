@extends('layouts.sidebar')
@section('page')
        BIN/EIN Providers List
    @endsection

@section('content')
        <br>

        <div style="position: absolute; float:right; border-radius: 2px; margin:0; border: 1px solid #f2f2f2; margin-left:480px; width:42%; padding:10px;">
        <form style="padding-left: 15%">
                <input placeholder="Search Infrignment Issuers" type="text" style="height: 35px;width:300px">
                <button class="btn btn-primary">Search</button>
            </form><hr><br>

            <?php
            /* Attempt MySQL server connection. Assuming you are running MySQL
            server with default setting (user 'root' with no password) */
            $link = mysqli_connect("localhost", "root", "", "project");

            // Check connection
            if($link === false){
                die("ERROR: Could not connect. " . mysqli_connect_error());
            }

            // Attempt select query execution
            $sql = "SELECT id,name,Designation,email,password, FROM providers order by id DESC";
            if($result = mysqli_query($link, $sql)){
                if(mysqli_num_rows($result) > 0){
                    echo "<table class='table'>";
                    echo "<tr align='center'>";
                    echo "<th scope='col'>Id</th>";
                    echo "<th scope='col'>Name</th>";
                    echo "<th scope='col'>Designation</th>";
                    echo "<th scope='col'>Email</th>";
                    echo "<th scope='col'>Password</th>";
                    echo "</tr>";
                    while($row = mysqli_fetch_array($result)){
                        echo "<tr align='center'>";
                        echo "<td>" . $row['id'] . "</td>";
                        echo "<td>" . $row['name'] . "</td>";
                        echo "<td>" . $row['Designation'] . "</td>";
                        echo "<td>" . $row['email'] . "</td>";
                        echo "<td>" . $row['password'] . "</td>";
                        echo "</tr>";
                    }
                    echo "</table>";
                    // Free result set
                    mysqli_free_result($result);
                } else{
                    echo "No records matching your query were found.";
                }
            } else{
                echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
            }

            // Close connection
            mysqli_close($link);
            ?>
        </div>

       
@endsection
