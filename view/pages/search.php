<div id="header"> <?php include("../layout/header.html"); ?> </div> 

<main role="main" class="container-fluid">
      <div class="card text-white bg-info mb-12">  
        <div class="card-header text-center">
          <h1>Pesquisa</h1>
        </div>
        <div class="card-body text-dark bg-white">
          <h5 class="card-title">Selecione o Período</h5>
          
          <div class="row ">
            
            <div class="col col-lg-3 col-md-3 col-sm-3">
              <label >Data Inicial:</label>
              <input type="date" name="dataInicial" class="form-control" id="dataInicial" 
                required oninvalid="this.setCustomValidity('INFORME A DATA INICIAL')"
                oninput="this.setCustomValidity('')"/> 
              </div>

              <div class="col col-lg-3 col-md-3 col-sm-3">
              <label >Data Final:</label>
              <input type="date" name="dataFinal" class="form-control" id="dataFinal"
                required oninvalid="this.setCustomValidity('INFORME A DATA FINAL')"
                oninput="this.setCustomValidity('')"/> 
              </div>
        </div>
        
        <div class="row " style="margin-top: 15; "> 
          <div class="col col-lg-6 col-md-6col-sm-6">
              <button type="button" class="btn btn-info btn-block">Buscar</button>
          </div>
        </div>
        </div>
      </div>
    </main>

<div id="footer"> <?php include("../layout/footer.html"); ?> </div> 
</html>
