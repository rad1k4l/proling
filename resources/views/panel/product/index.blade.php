@extends("panel.app")

@section("content")
<!-- BEGIN: Page Main-->
<div id="main">
  <div class="row">
    <div class="content-wrapper-before gradient-45deg-indigo-purple"></div>
    <div class="col s12">
      <div class="container">
        <div class="card">
          <div class="card-content">
            <p class="caption mb-0">Öz Marketinizi açaraq, satış əməliyyatları həyata keçirə bilər və s kimi fəaliyyət göstərə bilərsiniz</p>
          </div>
        </div>

        <!--Multiple File Input -->
        <div class="row">
          <div class="col s12">
            <div id="multiple-file-input" class="card card-tabs">
              <div class="card-content">
                <div class="card-title">
                  <div class="row">
                    <div class="col s12 m6 l10">
                      <h4 class="card-title">Şəkil Əlavə et</h4>
                    </div>
                  </div>
                </div>
                <div id="view-multiple-file-input" class="active">
                  <p>Siz bir çox şəkili <code class=" language-markup">eyni anda</code> əlavə edə bilərsiniz</p>
                  <form action="#">
                    <div class="file-field input-field">
                      <div class="btn">
                        <span>File</span>
                        <input type="file" multiple="">
                      </div>
                      <div class="file-path-wrapper">
                        <input class="file-path validate" type="text" placeholder="Upload one or more files">
                      </div>
                    </div>
                  </form>
                </div>

              </div>
            </div>
          </div>
        </div>

        <!-- Input Fields -->
        <div class="row">
          <div class="col s12">
            <div id="input-fields" class="card card-tabs">
              <div class="card-content">
               <div id="view-input-fields" class="active">
                <div class="row">
                  <div class="col s12">
                   <form class="row">
                    <div class="col s12">
                      <div class="input-field col s10">
                        <input id="about" type="text" class="validate">
                       <label for="about" class="active">Təsvir*</label>
                     </div>
                   </div>
                 </form>
               </div>
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>

   <!-- Input Fields -->
   <div class="row">
    <div class="col s12">
      <div id="input-fields" class="card card-tabs">
        <div class="input-field col s12">
         <!-- Modal Trigger -->
         Kategoriya *
         <a class="waves-effect waves-light btn modal-trigger" href="#modal1">Seçin</a>
         <!-- Modal Structure -->
         <div id="modal1" class="modal">
          <div class="modal-content">
            <h4>Modal Header</h4>
            <p>Kategoriyalar burada olacaq, Lalafo-dakı kimi</p>
          </div>
          <div class="modal-footer">
            <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Agree</a>
          </div>
        </div>


      </div>
    </div>
  </div>
</div>


<!-- Input Fields -->
<div class="row">
  <div class="col s12">
    <div id="input-fields" class="card card-tabs">
      <div class="card-content">
       <div id="view-input-fields" class="active">
        <div class="row">
          <div class="col s12">
           <form class="row">
            <div class="col s12">

              <div class="input-field col s6">
                <input placeholder="Placeholder" id="first_name1" type="text" class="validate">
                <label for="first_name1" class="active">Qiymət*</label>
              </div>

              <div class="input-field col s6">
                <select>
                  <option value="1">AZN</option>
                  <option value="2">Dollar</option>
                </select>
                <label>Valyuta Növü</label>
              </div>


            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>


<!-- Checkboxes -->
<div class="row">
  <div class="col s12">
    <div id="checkboxes" class="card card-tabs">
      <div class="card-content">
        <div class="card-title">
          <div class="row">
            <div class="col s12 m6 l10">
              <h4 class="card-title">Checkboxes</h4>
            </div>
          </div>
        </div>
        <div id="view-checkboxes" class="active">
          <p>Use checkboxes when looking for yes or no answers. The <code class=" language-markup">for</code>
            attribute is necessary to bind our custom checkbox with the input. Add the input's <code class=" language-markup">id</code>
            as the value of the <code class=" language-markup">for</code> attribute of the label. </p>
            <form action="#">
              <p>
                <label>
                  <input type="checkbox">
                  <span>Checkbox-1</span>
                </label>
              </p>
              <p>
                <label>
                  <input type="checkbox" checked="checked">
                  <span>Checkbox-2</span>
                </label>
              </p>
              <p>
                <label>
                  <input type="checkbox" class="filled-in" checked="checked">
                  <span>Filled in</span>
                </label>
              </p>
              <p>
                <label>
                  <input id="indeterminate-checkbox" type="checkbox">
                  <span>Indeterminate Style</span>
                </label>
              </p>
              <p>
                <label>
                  <input type="checkbox" checked="checked" disabled="disabled">
                  <span>Checkbox-3</span>
                </label>
              </p>
              <p>
                <label>
                  <input type="checkbox" disabled="disabled">
                  <span>Disabled Radio</span>
                </label>
              </p>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Input Fields -->
  <div class="row">
    <div class="col s12">
      <div id="input-fields" class="card card-tabs">
        <div class="card-content">
         <div id="view-input-fields" class="active">
          <div class="row">
            <div class="col s12">
             <form class="row">
              <div class="col s12">
                <div class="input-field col s10">
                 <input id="email" type="email" class="validate">
                 <label for="email" class="active">E-poçt*</label>
               </div>
             </div>
           </form>
         </div>
       </div>
     </div>
   </div>
 </div>
</div>
</div>


<!-- END RIGHT SIDEBAR NAV -->
<div style="bottom: 50px; right: 19px;" class="fixed-action-btn direction-top"><a class="btn-floating btn-large gradient-45deg-light-blue-cyan gradient-shadow"><i class="material-icons">add</i></a>
  <ul>
    <li><a href="css-helpers.html" class="btn-floating blue" style="opacity: 0; transform: scale(0.4) translateY(40px) translateX(0px);"><i class="material-icons">help_outline</i></a></li>
    <li><a href="cards-extended.html" class="btn-floating green" style="opacity: 0; transform: scale(0.4) translateY(40px) translateX(0px);"><i class="material-icons">widgets</i></a></li>
    <li><a href="app-calendar.html" class="btn-floating amber" style="opacity: 0; transform: scale(0.4) translateY(40px) translateX(0px);"><i class="material-icons">today</i></a></li>
    <li><a href="app-email.html" class="btn-floating red" style="opacity: 0; transform: scale(0.4) translateY(40px) translateX(0px);"><i class="material-icons">mail_outline</i></a></li>
  </ul>
</div>
</div>

</div>
<!--/ Current balance & total transactions cards-->




</div>
</div>
<!-- END: Page Main-->


@endsection

