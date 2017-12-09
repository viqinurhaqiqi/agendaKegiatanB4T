
                                    <table class="table table-striped table-bordered data">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Waktu </th>
                                                <th>Judul </th>
                                                <th>Deskripsi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $no=1;
                                            foreach ($jadwal as $k) {
                                                echo "<tr>
                                                        <td>$no</td>
                                                        <td>$k->date</td>
                                                        <td>$k->judul</td>
                                                        <td>$k->deskripsi</td>
                                                        <td><img src = '".base_url()."foto/".$k->gambar."' style ='width:100px; height: 100px;' ></td>
                                                    </tr>";
                                                $no++;
                                                
                                            }
                                        ?>
                                        </tbody>
