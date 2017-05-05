<?php require view('admin/static/header') ?>

<?php



json_encode(array(
    'data' => $query
));

?>



<script>

    $(document).ready(function() {
        $('#userstable').dataTable( {
            "aaSorting": [[ 1, "desc" ]]
        } );
    } );

</script>

<script language="javascript" type="text/javascript">
    <!--
    function popitup(url) {
        newwindow=window.open(url,'name','width=800,height=700,toolbar=0,menubar=0,location=0,status=0,scrollbars=1,resizable=0,left=0,top=0');
        if (window.focus) {newwindow.focus()}
        return false;
    }

    // -->
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
                        <h5>Tüm Müşteriler</h5>
                        <div class="widget-buttons">

                            <a href="#" data-title="Gizle" data-collapsed="false" class="tip collapse"><i class="icon-chevron-up"></i></a>
                        </div>
                    </div>
                    <div class="widget-body">
                        <table id="userstable" class="table table-striped table-bordered dataTable">
                            <thead>
                            <tr>
                                <th>Müşteri ID</th>
                                <th>Adı Soyadı</th>
                                <th>Telefon</th>
                                <th>Mail</th>
                                <th>TC Kimlik</th>
                                <th>Durum</th>
                                <th>Eylemler</th>

                            </tr>
                            </thead>
                            <tbody>
                            <?php


                            if ( $query ){
                                foreach ( $query as $row ){


                                    echo "<tr>
                                               <td>" . $row["customer_id"]. "</td>
                                               <td>" . $row["firstname"]. " " . $row["lastname"]. "</td>
                                               <td>" . $row["telephone"]. "</td>
                                               <td>" . $row["email"]. "</td>      
                                               <td>" . $row["fax"]. "</td>";

                                    $durumbilgisi = $durupanel->select('interviews')
                                        ->where('customer_id', $row["customer_id"])
                                        ->orderby('id', 'desc')
                                        ->limit(0, 1)
                                        ->run();
                                    echo "<td>";
                                    foreach ($durumbilgisi as $row9) {

                                        $interviews_result_table = $durupanel->select('interviews_result')
                                            ->where('result', $row9['result'])
                                            ->run();
                                        foreach ($interviews_result_table as $row7) {
                                            echo "<span  style='padding:7px 7px 7px 7px;' class='" . $row7['result_css'] ."'>" . $row7['result_name'] . "</span>";
                                        } };
                                    echo "</td>";

                                          echo "
                                                <td>
                                               <a href='user-edit?id=" . $row["customer_id"]. "' onclick=\"return popitup('user-edit?id=" . $row["customer_id"]. "')\"  class='btn btn-primary' target='_blank' ><i class='icon-eye-open'></i></a>
                                               <a href='?id=" . $row["customer_id"]. "' onclick=\"return confirm('Müşteriyi deaktif etmek istediğinize emin misiniz?');\" class='btn btn-danger'><i class='icon-ban-circle'></i></a>
                                               <a href='interviews?id=" . $row["customer_id"]. "' onclick=\"return popitup('interviews?id=" . $row["customer_id"]. "')\"  class='btn btn-warning' target='_blank' ><i class='icon-comments-alt'></i></a>
                                               <a href='interviewconnect?id=" . $row["customer_id"]. "' onclick=\"return popitup('interviewconnect?id=" . $row["customer_id"]. "')\"  class='btn btn-primary' target='_blank' ><i class='icon-exchange'></i></a>
                                               </td>
                                                
                                        </tr>";

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


