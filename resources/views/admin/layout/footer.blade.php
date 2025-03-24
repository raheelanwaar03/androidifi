</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel1">Add Person</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <label for="PersonName1" class="form-label d-block">Enter Name</label>
                <input type="text" id="PersonName1" class="form-control w-100 mb-3" placeholder="Username">
                <label for="PersonPosition1" class="form-label d-block">Enter Position</label>
                <input type="text" id="PersonPosition1" class="form-control w-100" placeholder="Position">

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary btn-sm">Save changes</button>
            </div>
        </div>
    </div>
</div>
<!-- /Modal -->
</div>
</div>

{{-- scripts --}}
@yield('scripts')

<script src="{{ asset('asset/vendor/global/global.min.js') }}"></script>
<script src="{{ asset('asset/vendor/chart.js/Chart.bundle.min.js') }}"></script>
<script src="{{ asset('asset/vendor/jquery-nice-select/asset/js/jquery.nice-select.min.js') }}"></script>
<script src="{{ asset('asset/vendor/jquery-autocomplete/jquery-ui.js') }}"></script>
<!-- Dashboard 1 -->
<script src="{{ asset('asset/js/dashboard/dashboard-1.js') }}"></script>
<script src="{{ asset('asset/js/custom.min.js') }}"></script>
<script src="{{ asset('asset/js/dlabnav-init.js') }}"></script>
<script src="{{ asset('asset/js/demo.js') }}"></script>
<script src="{{ asset('asset/js/styleSwitcher.js') }}"></script>

</body>

</html>
