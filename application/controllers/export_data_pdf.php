<?php

$fullname = $reg['firstname']." ".$reg["lastname"];
$nis = $reg["nis"];
$nik = $reg["nik_id"];
$birth_place = $reg["birth_place"];
$birth_date = $reg["birth_date"];
$citizenship = $reg["citizenship"];
$school_origin = $reg["school_origin"];
$nem = $reg["nem"];
$family_card = $reg['family_card'];
$birth_certificate = $reg['birth_certificate'];
$certificate_degree = $reg['certificate_degree'];
$certificate_exam_results = $reg['certificate_exam_results'];
$father_name = $data_father["guardian_name"];
$father_job = $data_father["job"];
$father_last_education = $data_father["last_education"];
$father_address = $data_father["address"];
$father_phone = $data_father["phone"];

$mother_name = $data_mother["guardian_name"];
$mother_job = $data_mother["job"];
$mother_last_education = $data_mother["last_education"];
$mother_address = $data_mother["address"];
$mother_phone = $data_mother["phone"];

$status = ucwords($reg['status']);

$content = <<<EOF
    

   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <link rel="stylesheet" type="text/css" id="mce-u0" crossorigin="anonymous" referrerpolicy="origin" href="https://cdn.tiny.cloud/1/qagffr3pkuv17a8on1afax661irst1hbr4e6tbv888sz91jc/tinymce/5.8.1-113/skins/ui/oxide/content.min.css">
      <link rel="stylesheet" type="text/css" id="mce-u1" crossorigin="anonymous" referrerpolicy="origin" href="https://cdn.tiny.cloud/1/qagffr3pkuv17a8on1afax661irst1hbr4e6tbv888sz91jc/tinymce/5.8.1-113/skins/content/default/content.min.css">
      <style type="text/css">.mymention{ color: gray; }body { font-family:Helvetica,Arial,sans-serif; font-size:14px }</style>
      <link rel="stylesheet" type="text/css" id="mce-u2" crossorigin="anonymous" referrerpolicy="origin" href="https://cdn.tiny.cloud/1/qagffr3pkuv17a8on1afax661irst1hbr4e6tbv888sz91jc/tinymce/5.8.1-113/plugins/mediaembed/content.min.css">
      <link rel="stylesheet" type="text/css" id="mce-u3" crossorigin="anonymous" referrerpolicy="origin" href="https://cdn.tiny.cloud/1/qagffr3pkuv17a8on1afax661irst1hbr4e6tbv888sz91jc/tinymce/5.8.1-113/plugins/a11ychecker/css/annotations.css">
      <link rel="stylesheet" type="text/css" id="mce-u4" crossorigin="anonymous" referrerpolicy="origin" href="https://cdn.tiny.cloud/1/qagffr3pkuv17a8on1afax661irst1hbr4e6tbv888sz91jc/tinymce/5.8.1-113/plugins/pageembed/css/empa30.css">
      <link rel="stylesheet" type="text/css" id="mce-u5" crossorigin="anonymous" referrerpolicy="origin" href="https://cdn.tiny.cloud/1/qagffr3pkuv17a8on1afax661irst1hbr4e6tbv888sz91jc/tinymce/5.8.1-113/plugins/linkchecker/content.min.css">
   </head>
   <body id="tinymce" class="mce-content-body" data-id="full-featured" contenteditable="true" spellcheck="false">
      <div>
         <h2>Data <span class="mce-spellchecker-annotation mce-spellchecker-word mce-cram_4729261331481624611289241" aria-invalid="spelling" data-mce-highlight-id="mce-cram_4729261331481624611289241" data-mce-bogus="1" data-mce-annotation="Calon" data-mce-lingo="en_us">Calon</span> <span class="mce-spellchecker-annotation mce-spellchecker-word mce-cram_9172369901491624611289241" aria-invalid="spelling" data-mce-highlight-id="mce-cram_9172369901491624611289241" data-mce-bogus="1" data-mce-annotation="Peserta" data-mce-lingo="en_us">Peserta</span> <span class="mce-spellchecker-annotation mce-spellchecker-word mce-cram_874350971501624611289241" aria-invalid="spelling" data-mce-highlight-id="mce-cram_874350971501624611289241" data-mce-bogus="1" data-mce-annotation="Didik" data-mce-lingo="en_us">Didik</span></h2>
      </div>
      <div>
         <div>
            <div>&nbsp;</div>
         </div>
         <div>
            <span data-mce-bogus="1" data-mce-type="format-caret"><span data-mce-bogus="1" data-mce-type="format-caret"><strong></strong></span></span>
            <table style="border-collapse: collapse; width: 100%;" border="1">
               <tbody>
                  <tr>
                     <td style="width: 15.201%;"><span class="mce-spellchecker-annotation mce-spellchecker-word mce-cram_89779050124581624611818733" aria-invalid="spelling" data-mce-highlight-id="mce-cram_89779050124581624611818733" data-mce-bogus="1" data-mce-annotation="Nama" data-mce-lingo="en_us">Nama</span></td>
                     <td style="width: 26.6334%;">$fullname</span></td>
                     <td style="width: 14.6501%;"><span class="mce-spellchecker-annotation mce-spellchecker-word mce-cram_3591522670531624612143427" aria-invalid="spelling" data-mce-highlight-id="mce-cram_3591522670531624612143427" data-mce-bogus="1" data-mce-annotation="Nilai" data-mce-lingo="en_us">Nilai</span>&nbsp;UN</td>
                     <td style="width: 39.5812%;">$nem</span></td>
                  </tr>
                  <tr>
                     <td style="width: 15.201%;"><span class="mce-spellchecker-annotation mce-spellchecker-word mce-cram_49222652824651624611821178" aria-invalid="spelling" data-mce-highlight-id="mce-cram_49222652824651624611821178" data-mce-bogus="1" data-mce-annotation="NIS" data-mce-lingo="en_us">NIS</span></td>
                     <td style="width: 26.6334%;">$nis</span></td>
                     <td style="width: 14.6501%;"><span class="mce-spellchecker-annotation mce-spellchecker-word mce-cram_42881835429421624611918607" aria-invalid="spelling" data-mce-highlight-id="mce-cram_42881835429421624611918607" data-mce-bogus="1" data-mce-annotation="Ijazah" data-mce-lingo="en_us">Ijazah</span></td>
                     <td style="width: 39.5812%;"><a href="http://localhost:72/ppdb_app/index.php/home/download/$fullname/$certificate_degree">download</a></span></td>
                  </tr>
                  <tr>
                     <td style="width: 15.201%;"><span class="mce-spellchecker-annotation mce-spellchecker-word mce-cram_74896903224951624611830477" aria-invalid="spelling" data-mce-highlight-id="mce-cram_74896903224951624611830477" data-mce-bogus="1" data-mce-annotation="NIK" data-mce-lingo="en_us">NIK</span></td>
                     <td style="width: 26.6334%;">$nik</span></td>
                     <td style="width: 14.6501%;"><span class="mce-spellchecker-annotation mce-spellchecker-word mce-cram_38999979331051624611944322" aria-invalid="spelling" data-mce-highlight-id="mce-cram_38999979331051624611944322" data-mce-bogus="1" data-mce-annotation="SKHUN" data-mce-lingo="en_us">SKHUN</span></td>
                     <td style="width: 39.5812%;"><a href="http://localhost:72/ppdb_app/index.php/home/download/$fullname/$certificate_exam_results">download</a></span></td>
                  </tr>
                  <tr>
                     <td style="width: 15.201%;"><span class="mce-spellchecker-annotation mce-spellchecker-word mce-cram_80620547025311624611846005" aria-invalid="spelling" data-mce-highlight-id="mce-cram_80620547025311624611846005" data-mce-bogus="1" data-mce-annotation="Tempat" data-mce-lingo="en_us">Tempat</span> <span class="mce-spellchecker-annotation mce-spellchecker-word mce-cram_47366786125341624611847899" aria-invalid="spelling" data-mce-highlight-id="mce-cram_47366786125341624611847899" data-mce-bogus="1" data-mce-annotation="Lahir" data-mce-lingo="en_us">Lahir</span></td>
                     <td style="width: 26.6334%;">$birth_place</span></td>
                     <td style="width: 14.6501%;"><span class="mce-spellchecker-annotation mce-spellchecker-word mce-cram_67064676734161624611964913" aria-invalid="spelling" data-mce-highlight-id="mce-cram_67064676734161624611964913" data-mce-bogus="1" data-mce-annotation="KK" data-mce-lingo="en_us">KK</span></td>
                     <td style="width: 39.5812%;"><a href="http://localhost:72/ppdb_app/index.php/home/download/$fullname/$family_card">download</a></span></td>
                  </tr>
                  <tr>
                     <td style="width: 15.201%;"><span class="mce-spellchecker-annotation mce-spellchecker-word mce-cram_29815101526051624611859563" aria-invalid="spelling" data-mce-highlight-id="mce-cram_29815101526051624611859563" data-mce-bogus="1" data-mce-annotation="Tanggal" data-mce-lingo="en_us">Tanggal</span> <span class="mce-spellchecker-annotation mce-spellchecker-word mce-cram_68111484826081624611861812" aria-invalid="spelling" data-mce-highlight-id="mce-cram_68111484826081624611861812" data-mce-bogus="1" data-mce-annotation="Lahir" data-mce-lingo="en_us">Lahir</span></td>
                     <td style="width: 26.6334%;">$birth_date</span></td>
                     <td style="width: 14.6501%;"><span class="mce-spellchecker-annotation mce-spellchecker-word mce-cram_58347551535121624611981218" aria-invalid="spelling" data-mce-highlight-id="mce-cram_58347551535121624611981218" data-mce-bogus="1" data-mce-annotation="Akte" data-mce-lingo="en_us">Akte</span> <span class="mce-spellchecker-annotation mce-spellchecker-word mce-cram_76906473535381624611984392" aria-invalid="spelling" data-mce-highlight-id="mce-cram_76906473535381624611984392" data-mce-bogus="1" data-mce-annotation="Kelahiran" data-mce-lingo="en_us">Kelahiran</span></td>
                     <td style="width: 39.5812%;"><a href="http://localhost:72/ppdb_app/index.php/home/download/$fullname/$birth_certificate">download</a></span></td>
                  </tr>
                  <tr>
                     <td style="width: 15.201%;"><span class="mce-spellchecker-annotation mce-spellchecker-word mce-cram_23215227126841624611872701" aria-invalid="spelling" data-mce-highlight-id="mce-cram_23215227126841624611872701" data-mce-bogus="1" data-mce-annotation="Kewarganegaraan" data-mce-lingo="en_us">Kewarganegaraan</span></td>
                     <td style="width: 26.6334%;">$citizenship</td>
                     <td style="width: 14.6501%;"><br data-mce-bogus="1"></td>
                     <td style="width: 39.5812%;"><br></td>
                  </tr>
               </tbody>
            </table>
         </div>
         <div><br></div>
         <div>
            <div>
               <div>
                  <div>
                     <h2>Data <span class="mce-spellchecker-annotation mce-spellchecker-word mce-cram_32050076489881624612196682" aria-invalid="spelling" data-mce-highlight-id="mce-cram_32050076489881624612196682" data-mce-bogus="1" data-mce-annotation="Orang" data-mce-lingo="en_us">Orang</span> <span class="mce-spellchecker-annotation mce-spellchecker-word mce-cram_68349246189891624612196682" aria-invalid="spelling" data-mce-highlight-id="mce-cram_68349246189891624612196682" data-mce-bogus="1" data-mce-annotation="Tua" data-mce-lingo="en_us">Tua</span></h2>
                  </div>
                  <div>
                     <div>
                        <table style="border-collapse: collapse; width: 100%; height: 114px;" border="1" data-mce-style="border-collapse: collapse; width: 100%; height: 114px;">
                           <tbody>
                              <tr style="height: 19px;" data-mce-style="height: 19px;">
                                 <td style="width: 41.8344%; height: 19px;" colspan="2" data-mce-style="width: 41.8344%; height: 19px;"><strong>Ayah</strong></td>
                                 <td style="width: 41.8344%; height: 19px;" colspan="2" data-mce-style="width: 41.8344%; height: 19px;"><strong><span class="mce-spellchecker-annotation mce-spellchecker-word mce-cram_32379146589901624612196682" aria-invalid="spelling" data-mce-highlight-id="mce-cram_32379146589901624612196682" data-mce-bogus="1" data-mce-annotation="Ibu" data-mce-lingo="en_us">Ibu</span></strong></td>
                              </tr>
                              <tr style="height: 19px;" data-mce-style="height: 19px;">
                                 <td style="width: 15.201%; height: 19px;" data-mce-style="width: 15.201%; height: 19px;"><span class="mce-spellchecker-annotation mce-spellchecker-word mce-cram_44642764989911624612196683" aria-invalid="spelling" data-mce-highlight-id="mce-cram_44642764989911624612196683" data-mce-bogus="1" data-mce-annotation="Nama" data-mce-lingo="en_us">Nama</span></td>
                                 <td style="width: 26.6334%; height: 19px;" data-mce-style="width: 26.6334%; height: 19px;">$father_name</span></td>
                                 <td style="width: 15.201%; height: 19px;" data-mce-style="width: 15.201%; height: 19px;"><span class="mce-spellchecker-annotation mce-spellchecker-word mce-cram_23875832389931624612196683" aria-invalid="spelling" data-mce-highlight-id="mce-cram_23875832389931624612196683" data-mce-bogus="1" data-mce-annotation="Nama" data-mce-lingo="en_us">Nama</span></td>
                                 <td style="width: 26.6334%; height: 19px;" data-mce-style="width: 26.6334%; height: 19px;">$mother_name</span></td>
                              </tr>
                              <tr style="height: 19px;" data-mce-style="height: 19px;">
                                 <td style="width: 15.201%; height: 19px;" data-mce-style="width: 15.201%; height: 19px;"><span class="mce-spellchecker-annotation mce-spellchecker-word mce-cram_30637423789951624612196684" aria-invalid="spelling" data-mce-highlight-id="mce-cram_30637423789951624612196684" data-mce-bogus="1" data-mce-annotation="Pekerjaan" data-mce-lingo="en_us">Pekerjaan</span></td>
                                 <td style="width: 26.6334%; height: 19px;" data-mce-style="width: 26.6334%; height: 19px;">$$father_job</span></td>
                                 <td style="width: 15.201%; height: 19px;" data-mce-style="width: 15.201%; height: 19px;"><span class="mce-spellchecker-annotation mce-spellchecker-word mce-cram_34098282789971624612196684" aria-invalid="spelling" data-mce-highlight-id="mce-cram_34098282789971624612196684" data-mce-bogus="1" data-mce-annotation="Pekerjaan" data-mce-lingo="en_us">Pekerjaan</span></td>
                                 <td style="width: 26.6334%; height: 19px;" data-mce-style="width: 26.6334%; height: 19px;">$mother_job</span></td>
                              </tr>
                              <tr style="height: 19px;" data-mce-style="height: 19px;">
                                 <td style="width: 15.201%; height: 19px;" data-mce-style="width: 15.201%; height: 19px;"><span class="mce-spellchecker-annotation mce-spellchecker-word mce-cram_56804942389991624612196685" aria-invalid="spelling" data-mce-highlight-id="mce-cram_56804942389991624612196685" data-mce-bogus="1" data-mce-annotation="Pendidikan" data-mce-lingo="en_us">Pendidikan</span></td>
                                 <td style="width: 26.6334%; height: 19px;" data-mce-style="width: 26.6334%; height: 19px;">$father_last_education</span></td>
                                 <td style="width: 15.201%; height: 19px;" data-mce-style="width: 15.201%; height: 19px;"><span class="mce-spellchecker-annotation mce-spellchecker-word mce-cram_45823003690011624612196686" aria-invalid="spelling" data-mce-highlight-id="mce-cram_45823003690011624612196686" data-mce-bogus="1" data-mce-annotation="Pendidikan" data-mce-lingo="en_us">Pendidikan</span></td>
                                 <td style="width: 26.6334%; height: 19px;" data-mce-style="width: 26.6334%; height: 19px;">$mother_last_education</span></td>
                              </tr>
                              <tr style="height: 19px;" data-mce-style="height: 19px;">
                                 <td style="width: 15.201%; height: 19px;" data-mce-style="width: 15.201%; height: 19px;"><span class="mce-spellchecker-annotation mce-spellchecker-word mce-cram_45799923290031624612196686" aria-invalid="spelling" data-mce-highlight-id="mce-cram_45799923290031624612196686" data-mce-bogus="1" data-mce-annotation="Telepon" data-mce-lingo="en_us">Telepon</span></td>
                                 <td style="width: 26.6334%; height: 19px;" data-mce-style="width: 26.6334%; height: 19px;">$father_phone</span></td>
                                 <td style="width: 15.201%; height: 19px;" data-mce-style="width: 15.201%; height: 19px;"><span class="mce-spellchecker-annotation mce-spellchecker-word mce-cram_2604640990051624612196687" aria-invalid="spelling" data-mce-highlight-id="mce-cram_2604640990051624612196687" data-mce-bogus="1" data-mce-annotation="Telepon" data-mce-lingo="en_us">Telepon</span></td>
                                 <td style="width: 26.6334%; height: 19px;" data-mce-style="width: 26.6334%; height: 19px;">$mother_phone</span></td>
                              </tr>
                              <tr style="height: 19px;" data-mce-style="height: 19px;">
                                 <td style="width: 15.201%; height: 19px;" data-mce-style="width: 15.201%; height: 19px;"><span class="mce-spellchecker-annotation mce-spellchecker-word mce-cram_97779528590071624612196687" aria-invalid="spelling" data-mce-highlight-id="mce-cram_97779528590071624612196687" data-mce-bogus="1" data-mce-annotation="Alamat" data-mce-lingo="en_us">Alamat</span></td>
                                 <td style="width: 26.6334%; height: 19px;" data-mce-style="width: 26.6334%; height: 19px;">$father_address</span></td>
                                 <td style="width: 15.201%; height: 19px;" data-mce-style="width: 15.201%; height: 19px;"><span class="mce-spellchecker-annotation mce-spellchecker-word mce-cram_9180316790091624612196688" aria-invalid="spelling" data-mce-highlight-id="mce-cram_9180316790091624612196688" data-mce-bogus="1" data-mce-annotation="Alamat" data-mce-lingo="en_us">Alamat</span></td>
                                 <td style="width: 26.6334%; height: 19px;" data-mce-style="width: 26.6334%; height: 19px;">$mother_address</td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                  </div>
               </div>
               <div><br data-mce-bogus="1"></div>
               <div>
                  <div>
                     <h2><strong>Status: $status</strong></h2>
                  </div>
                  <div>
                     <div></div>
                  </div>
               </div>
            </div>
         </div>
      </div>

EOF;
// echo $content;
$this->generateHTMLToPDF("Data Calon Peserta Didik $fullname", $content);
// $DomPDF_helper->export_html($title, $content);
?>