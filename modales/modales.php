<!-- Modal img -->
<div class="modal fade" id="modalimg" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-xl">
      <div class="modal-content">

         <div class="modal-body">
            <div class="container-slider">
               <div class="slider" id="slider">
               </div>
            </div>

            <div class="content_btn">
               <i class="fas fa-angle-left slider_btn d-flex" id="btn_left"></i>
               <i class="fas fa-angle-right slider_btn d-flex" id="btn_right"></i>
            </div>
         </div>

         <div class="modal-footer justify-content-between">
            <div id="modal_description" class="modal_description"></div>
            
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
               Cerrar
            </button>
         </div>
      </div>
   </div>
</div>
<!-- Modal img -->


<!-- Modal contact -->
<div class="modal fade" id="modalContact" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-lg">
      <div class="modal-content">

         <div class="modal-body">
            <form class="p-2" onsubmit="contactEmail(); return false">
               <div class="mb-3">
                  <label class="form-label">Nombre</label>
                  <input type="text" name="name" id="name" class="form-control" placeholder="Ingrese su nombre" required>
               </div>
               <div class="mb-3">
                  <label class="form-label">Email</label>
                  <input type="text" name="email" id="email" class="form-control" placeholder="Ingrese su email" required>
               </div>
               <div class="mb-3">
                  <label class="form-label">Asunto</label>
                  <input type="text" name="asunto" id="asunto" class="form-control" placeholder="Ingrese el asunto del mensaje" required>
               </div>
               <div class="mb-4">
                  <label class="form-label">Mensaje</label>
                  <textarea class="form-control" name="mensaje" id="mensaje" placeholder="Escriba aqui su mensaje" required></textarea>
               </div>

               <button type="submit" class="btn btn-primary">
                  Enviar <i class="fas fa-paper-plane"></i>
               </button>
               <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                  Cerrar
               </button>
            </form>      
         </div>

      </div>
   </div>
</div>
<!-- Modal contact -->