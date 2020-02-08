@section('footer')

<footer class="page-footer footer footer-static footer-dark gradient-45deg-indigo-purple gradient-shadow navbar-border navbar-shadow">
	<div class="footer-copyright">
		<div class="container"><span>&copy; 2019 All rights reserved.</span>
			<span class="right hide-on-small-only">Design by <a href="https://bookguide.tk/">F.X Team</a> & Developed by Orxan
			</span>
		</div>
	</div>
</footer>

<!-- END: Footer-->
<!-- BEGIN VENDOR JS-->
<script src="/js/vendors.min.js" type="text/javascript"></script>
<!-- BEGIN VENDOR JS-->
<!-- BEGIN PAGE VENDOR JS-->
<script src="/vendors/chartjs/chart.min.js" type="text/javascript"></script>
<script src="/vendors/chartist-js/chartist.min.js" type="text/javascript"></script>
{{--<script src="/panel/vendors/chartist-js/chartist-plugin-tooltip.js" type="text/javascript"></script>--}}
<script src="/vendors/chartist-js/chartist-plugin-fill-donut.min.js" type="text/javascript"></script>
<!-- END PAGE VENDOR JS-->
<!-- BEGIN THEME  JS-->
<script src="/js/plugins.js" type="text/javascript"></script>
<script src="/js/custom/custom-script.js" type="text/javascript"></script>
<script src="/js/scripts/customizer.js" type="text/javascript"></script>
<!-- END THEME  JS-->
<!-- BEGIN PAGE LEVEL JS-->
{{--<script src="/panel/js/scripts/dashboard-modern.js" type="text/javascript"></script>--}}
<script src="{{ asset('js/vue.dev.js') }}"></script>
<script src="{{ asset("js/axios.js") }}"></script>

<script src="{{ asset('js/scripts/sweet.js') }}"></script>
<script src="{{ asset('js/scripts/advance-ui-modals.js') }}"></script>
@yield("application_javascript")


@if(session("success"))
    <style>
        .toast{
            background-color: #66bb6a !important;
        }
    </style>
    <script>
        M.toast({html: '{{ session("success") }}'  });
    </script>

@endif



@if(session("message"))
    <script>
        M.toast({html: '{{ session("message") }}'  });
    </script>

@endif

@if(session("error"))
    <style>
        .toast{
            background-color:  #ef5350 !important;
        }
    </style>
    <script>
        M.toast({html: '{{ session("error") }}'  });
    </script>
@endif

</body>
</html>

@show
