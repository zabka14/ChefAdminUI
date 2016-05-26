<?php 
  $my_var = "Ceci est une variable !";
 ?>


<div ba-panel
     ba-panel-class="tabs-panel xsmall-panel with-scroll">
  <uib-tabset class="tabs-left">
    <uib-tab heading=Infos>
      <p class="text-center" style="font-size:200%;">
        MRM
      </p>
      <br>
      <div class="table-responsive">
        <table class="table table-bordered table-hover table-condensed">
          <tbody>
            <tr>
              <td>Version actuelle</td>
              <td>6.0.0</td>
            </tr>
            <tr>
              <td>MRM_WEB</td>
              <td><button class="status-button btn btn-xs btn-success">OK</button></td>
            </tr>
            <tr>
              <td>MRM_SGBD</td>
              <td><button class="status-button btn btn-xs btn-success">OK</button></td>
            </tr>
          </tbody>
        </table>
      </div>


    </uib-tab>
    <uib-tab heading="Configurer">
      <?php
      echo "string";
      ?>
    </uib-tab>
    <uib-tab heading="Deployer">
      <?php
      echo $my_var;
      ?>
    </uib-tab>
  </uib-tabset>
</div>

<div ba-panel
     ba-panel-class="tabs-panel xsmall-panel with-scroll">
  <uib-tabset class="tabs-left">
    <uib-tab heading=Infos>
      <p class="text-center" style="font-size:200%;">
        Mobilis
      </p>
      <br>
      <div class="table-responsive">
        <table class="table table-bordered table-hover table-condensed">
          <tbody>
            <tr>
              <td>Version actuelle</td>
              <td>0.0.0</td>
            </tr>
            <tr>
              <td>MOBILIS_WEB</td>
              <td><button class="status-button btn btn-xs btn-danger">KO</button></td>
            </tr>
            <tr>
              <td>MOBILIS_SGBD</td>
              <td><button class="status-button btn btn-xs btn-danger">KO</button></td>
            </tr>
          </tbody>
        </table>
      </div>


    </uib-tab>
    <uib-tab heading="Configurer">
      
    </uib-tab>
    <uib-tab heading="Deployer">
      
    </uib-tab>
  </uib-tabset>
</div>
