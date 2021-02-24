<x-header />
<body>


<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous"></script>
<style>
h1{
  margin-top:20px;
  margin-bottom:30px;
  
  color:#FF7F41FF;
}
.btn-success{
border-color:#FF7F41FF;
  background-color:#FF7F41FF;
}
.btn-outline-dark{
  border-color:#DCDCDC;
  background-color:#DCDCDC;
}
</style>
@if(Session::has('succes_send'))
 <script>
   swal("Bien fait!","{!! Session::get('succes_added')!!}"),{
  button:"OK",
   }
 </script>
  @endif
  </head>
  <body>
<div class="section-title">
     <h2>Partager document</h2>
</div>

<div class="container">
            <div class="row">
                <div class="col-xl-8 offset-xl-2 py-5">
                <form action="contact " method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row mb-3">
                  <div class="col">
                    <input class="form-control" type="text" name="subject"   placeholder="*Subject" required="required"/>
                  </div>
                </div>
                <div class="row mb-3 ">
                <div class="col">
                    <input class="form-control" type="email" name="email"  placeholder="*E-mail" required="required"/>
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col">
                    <textarea class="form-control" name="message"    placeholder="*Your Message" rows="5" required="required"></textarea>
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col">
                  <input class="form-control-file"  type="file" name="docx"  required="required" >
                  </div>
                </div>
                <div class="row">
                  <div class="col">
                    <button class="btn btn-success" type="submit">Envoyer</button>
                    <button type="reset" class="btn btn-outline-dark">Annuler</button>
                  </div>
                </div>
              </form>
         </div>
     </div>
</div>
</body>
 <x-footer />
