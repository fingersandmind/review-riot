<script src="{{ asset('assets/backend/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/backend/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/backend/js/nav.min.js') }}"></script>
<script src="{{ asset('assets/backend/js/moment.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>



<!-- *************
        ************ Vendor Js Files *************
    ************* -->
<!-- Daterange -->
<script src="{{ asset('assets/backend/vendor/daterange/daterange.js') }}"></script>

<!-- Apex Charts -->
{{--  <script src="{{ asset('assets/backend/vendor/apex/apexcharts.min.js') }}"></script>
<script src="{{ asset('assets/backend/vendor/apex/custom/apexLineChartGradient.js') }}"></script>
<script src="{{ asset('assets/backend/vendor/apex/custom/apexColumnBasic.js') }}"></script>
<script src="{{ asset('assets/backend/vendor/apex/custom/apexAllCustomGraphs.js') }}"></script>  --}}

<!-- Main Js Required -->

<script src="{{ asset('assets/backend/js/main.js') }}"></script>
@stack('additionalJS')