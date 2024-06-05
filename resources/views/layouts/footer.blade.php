   <!-- foot -->
   <div class="hm-7 vh-55 df dfc jcc aic footer-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <img src="{{url('rsx/logo.svg')}}" alt="" style="width: 300px">
                <h1 class="display-4 l">IUT Al-Fazari Interstellar Society</h1>
                <p class="text-light lead"> #LookUpToWonder</p>
            </div>
            <div class="col-md-7 df dfc jcc">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 offset-md-2">
                            <h1 class="display-4 text-secondary" id="Date-Time"></h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-10 offset-md-2">
                            <p class="lead text-light">
                                Humans of the Red Heaven have conquered the Earth. It's time to dive into deep space!
                            </p>
                        </div>   
                    </div>
                    <div class="row">
                        <div class="col-md-10 offset-md-2">
                            <a href="#" class="btn btn-outline-light">Join Us</a>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-md-9 offset-md-2">
                            <p class="text-light">Follow us on: &nbsp;&nbsp;&nbsp;
                                <a href="#" class="text-light me-3"><i class="uil uil-facebook-f fs-3"></i></a>
                                <a href="#" class="text-light me-3"><i class="uil uil-twitter fs-3"></i></a>
                                <a href="#" class="text-light me-3"><i class="uil uil-instagram fs-3"></i></a>
                                <a href="#" class="text-light me-3"><i class="uil uil-youtube fs-3"></i></a>
                                <a href="#" class="text-light me-3"><i class="uil uil-linkedin fs-3"></i></a>
                                
                            </p>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <p class="text-secondary text-center">© <span id="year"></span> IUT Al-Fazari Interstellar Society. All rights reserved.</p>
            </div>
        </div>
    </div>
    </div>
  </div> 


  <style>
    .footer-bg{
      background-color: rgba(0, 14, 24, 1)
    }
  </style>


<script>
    new DataTable('#stable');
</script>


<script>
    document.addEventListener('scroll', () => {
        const navbar = document.getElementById('boss_navbar');
        if (window.scrollY === 0) {
            navbar.className = 'navbar navbar-dark navbar-expand-lg bgd fixed-top bs';
        } else {
            navbar.className = 'navbar navbar-expand-lg bg-body-tertiary fixed-top bs';
        }
    });
</script>

<!-- Foot end -->

















{{-- For the footer clock --}}

<script>
    async function fetchUserTimezone() {
        try {
            // Using a public API to fetch the user's IP information
            const response = await fetch('https://ipapi.co/json/');
            const data = await response.json();
            return data.timezone;
        } catch (error) {
            console.error('Error fetching IP information:', error);
            return 'UTC'; // Fallback to UTC in case of error
        }
    }

    async function fetchCurrentTime(timezone) {
        try {
            // Using a public API to fetch the current time for the given timezone
            const response = await fetch(`http://worldtimeapi.org/api/timezone/${timezone}`);
            const data = await response.json();
            return new Date(data.datetime);
        } catch (error) {
            console.error('Error fetching time:', error);
            return new Date(); // Fallback to local time in case of error
        }
    }

    function formatTime(date) {
        let hours = date.getHours();
        let minutes = date.getMinutes();
        let seconds = date.getSeconds();
        let ampm = hours >= 12 ? 'PM' : 'AM';
        
        hours = hours % 12;
        hours = hours ? hours : 12; // the hour '0' should be '12'
        minutes = minutes < 10 ? '0'+minutes : minutes;
        seconds = seconds < 10 ? '0'+seconds : seconds;
        
        return `${hours}:${minutes}:${seconds} ${ampm}`;
    }

    async function updateTime() {
        const timezone = await fetchUserTimezone();
        const currentTime = await fetchCurrentTime(timezone);
        setInterval(() => {
            currentTime.setSeconds(currentTime.getSeconds() + 1);
            document.getElementById('Date-Time').innerText = formatTime(currentTime);
        }, 1000);
    }

    // Initialize the time display
    updateTime();
</script>

<script>
    document.getElementById('year').innerText = new Date().getFullYear();
</script>
</body>
</html>

