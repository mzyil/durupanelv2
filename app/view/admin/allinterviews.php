<?php require view('admin/static/header') ?>

<?php



json_encode(array(
    'data' => $query
));

?>



<script>

    $(document).ready(function() {
        $('#usersx').dataTable( {
            "aaSorting": [[ 1, "desc" ]]
        } );
    } );

</script>

<body style="margin:0;" onload="myFunction()">



<br>
<div id="loader"></div>

<!-- Main window -->

<div style="display:none;" id="myDiv">


    <div class="main_container" id="tables_page">



        <div class="row-fluid">
            <div class="widget widget-padding span12">
                <div class="widget-header">
                    <i class="icon-group"></i>
                    <h5>Son Görüşmeler</h5>
                    <div class="widget-buttons">

                        <a href="#" data-title="Gizle" data-collapsed="false" class="tip collapse"><i class="icon-chevron-up"></i></a>
                    </div>
                </div>
                <div class="widget-body">
                    <table id="usersx" class="table table-striped table-bordered dataTable">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Müşteri ID</th>
                            <th>Adı Soyadı</th>
                            <th>Telefon</th>
                            <th>Şehir</th>
                            <th>Konu</th>
                            <th>Özet</th>
                            <th>Durum</th>
                            <th>Oluşturan</th>
                            <th>Oluşturma Tarihi</th>


                        </tr>
                        </thead>
                        <tbody>
                        <?php


                        if ( $query ){
                            foreach ( $query as $row ){

                                $durumbilgisi = $durupanel->select('local_customer')
                                    ->where('local_customer_id', $row["customer_id"])
                                    ->run();

                                $durumbilgisi2 = $db->select('sat_customer')
                                    ->where('customer_id', $row["customer_id"])
                                    ->run();

                                foreach ($durumbilgisi as $row9) {
                                    echo "<tr>
                                               <td>" . $row["id"] . " </td>
                                               <td>" . $row9["local_customer_id"] . " </td>
                                               <td>" . $row9["isim"] . " " .  $row9["soyisim"] . "</td>
                                               <td>" . $row9["telefon_1"] . " </td>
                                           
                                                <td>" . $row9["il"] . " </td>
                                               <td>" . $row["course"] . "</td>
                                               <td>" . $row["result_content"] . "</td>";
                                    $durumbilgisi = $durupanel->select('interviews')
                                        ->where('id', $row["id"])
                                        ->limit(0, 1)
                                        ->run();

                                    echo "<td>";
                                    foreach ($durumbilgisi as $row9) {
                                        $created_by = $row9['created_by'];
                                        $interviews_result_table = $durupanel->select('interviews_result')
                                            ->where('result', $row9['result'])
                                            ->run();
                                        foreach ($interviews_result_table as $row7) {
                                            echo "<span  style='padding:7px 7px 7px 7px;' class='" . $row7['result_css'] ."'>" . $row7['result_name'] . "</span>";
                                        } };
                                    echo "</td>";

                                    $created_by_db = $durupanel->select('users')
                                        ->where('user_id', $created_by)
                                        ->run();
                                    foreach ($created_by_db as $created_row) {

                                        echo  "  
                                               <td>" . $created_row['user_firstname'] . " " . $created_row['user_lastname'] . "</td>
                                                <td>" . $row['created_at'] ."</td>
                                               
                                              
                                        </tr>";
                                    }
                                }
                                foreach ($durumbilgisi2 as $row9) {
                                    echo "<tr>
                                                <td>" . $row["id"] . " </td>
                                               <td>" . $row9["customer_id"] . " </td>
                                               <td>" . $row9["firstname"] . " " .  $row9["lastname"] . "</td>
                                               <td>" . $row9["telephone"] . " </td>    
                                                <td>" . $row9["il"] . " </td>
                                               <td>" . $row["course"] . "</td>
                                               <td>" . $row["result_content"] . "</td>";
                                    $durumbilgisi = $durupanel->select('interviews')
                                        ->where('id', $row["id"])
                                        ->limit(0, 1)
                                        ->run();

                                    echo "<td>";
                                    foreach ($durumbilgisi as $row9) {
                                        $created_by = $row9['created_by'];
                                        $interviews_result_table = $durupanel->select('interviews_result')
                                            ->where('result', $row9['result'])
                                            ->run();
                                        foreach ($interviews_result_table as $row7) {
                                            echo "<span  style='padding:7px 7px 7px 7px;' class='" . $row7['result_css'] ."'>" . $row7['result_name'] . "</span>";
                                        } };
                                    echo "</td>";

                                    $created_by_db = $durupanel->select('users')
                                        ->where('user_id', $created_by)
                                        ->run();
                                    foreach ($created_by_db as $created_row) {

                                        echo  "  
                                               <td>" . $created_row['user_firstname'] . " " . $created_row['user_lastname'] . "</td>
                                                <td>" . $row['created_at'] ."</td>
                                               
                                              
                                        </tr>";
                                    }
                                }
                            }
                        }

                        ?>




                        </tbody>
                    </table>
                </div> <!-- /widget-body -->
            </div> <!-- /widget -->
        </div> <!-- /row-fluid -->

    </div>
    <!-- /Main window -->

    <script>
        var myVar;

        function myFunction() {
            myVar = setTimeout(showPage, 1000);
        }

        function showPage() {
            document.getElementById("loader").style.display = "none";
            document.getElementById("myDiv").style.display = "block";
        }
    </script>


</div>


<?php require view('admin/static/footer') ?>


