<div id="reload">
    <div class="container">
        <div class="row justify-content-center">
            <h1>Coin Locker</h1> 
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr class="table-dark text-dark">
                            <th class="text-center"> <h3>S</h3> </th>
                            <th class="text-center"> <h3>M</h3> </th>
                            <th class="text-center"> <h3>L</h3> </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <?php
                            $table="";
                            foreach($locker as $a => $value) {
                                if($value->status_locker==0){
                                    $showstatus="<p class='text-success'>พร้อมใช้งาน</p>";
                                }else{
                                    $showstatus="<p class='text-danger'>ไม่พร้อมใช้งาน</p>";
                                }
                                $table .= "<td class='text-center'>
                                                <a href='#' onclick='showmodal($value->name_locker,$value->size,$value->status_locker)'> <img src='photo/locker$value->name_locker.png' width='50' height='70'></a>
                                                <br>  $showstatus
                                             </td>";
                                    if(($a+1) % 3 == 0)
                                            $table .= "</tr><tr>";
                                        }
                            echo $table;
                        ?>
                        </tr>
                    </tbody>
                </table>
            </div>
                <table>
                     <tr>
                        <td> <p>เวลาปัจจุบัน : <?php $datestart = date("Y-m-d H:i:s"); print($datestart);?> </p> </td>
                    </tr>
                    <tr>
                        <td class="text-center"> 
                            <input type="submit" class="btn btn-danger" form="setdefault" value="Set Default">
                             <form method="POST" id="setdefault" class="delete" action="setdefault">
                                 {{ csrf_field() }}
                             </form>
                        </td>
                    </tr>
                </table>
        </div>
    </div>
</div>


@include('modal/modal')

