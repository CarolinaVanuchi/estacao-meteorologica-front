
<div id="header"> <?php include("../layout/header.html"); ?> </div> 

<main role="main" class="container-fluid">
      <div class="card text-white bg-info mb-12">  
        <div class="card-header text-center">
          <h1>Gerar o arquivo CSV</h1>
        </div>
        <div class="card-body text-dark bg-white">
          <h5 class="card-title">Selecione o Período</h5>
          <form role="form" action="gerar_csv_funcao.php" method="POST">
              <div class="row ">
                
                <div class="col col-lg-3 col-md-3 col-sm-3">
                  <label >Data Inicial:</label>
                  <input type="date" name="date1" class="form-control" id="date1" 
                    required oninvalid="this.setCustomValidity('INFORME A DATA INICIAL')"
                    oninput="this.setCustomValidity('')"/> 
                  </div>

                  <div class="col col-lg-3 col-md-3 col-sm-3">
                  <label >Data Final:</label>
                  <input type="date" name="date2" class="form-control" id="date2"
                    required oninvalid="this.setCustomValidity('INFORME A DATA FINAL')"
                    oninput="this.setCustomValidity('')"/> 
                  </div>
            </div>
            
            <div class="row " style="margin-top: 15; "> 
              <div class="col col-lg-6 col-md-6col-sm-6">
                <button type="submit" name="salvar" class="btn btn-info btn-block">Gerar</button> 
              </div>
            </div>
        </form>
        </div>
      </div>
    </main>

<div id="footer"> <?php include("../layout/footer.html"); ?> </div> 
</html>
