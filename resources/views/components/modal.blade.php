
  <!-- Modal -->
  <div class="modal fade" id="modalComponent" tabindex="-1" aria-labelledby="modalComponentLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered ">
      <div class="modal-content">
        <div class="modal-header">
          <h1 id="title-modal" ></h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            {{$slot}}
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-accept " id="btn-store">Acceptar</button>
        </div>
      </div>
    </div>
  </div>