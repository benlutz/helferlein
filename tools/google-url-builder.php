<div class="card my-2" id="Google-URL-Builder">
  <div class="card-body">
    <h2 class="card-title">Google URL Builder</h2>
    <h6 class="card-subtitle text-muted">Create you Tracking URLs for Google Analytics</h3>
    <form class="">
      <div class="form-row my-2">
        <div class="col">
          <input type="text" class="form-control" placeholder="Website URL" id="Google-Website-URL" autocomplete="off">
        </div>
      </div>
      <div class="form-row my-2">
        <div class="col">
          <input type="text" class="form-control" placeholder="Campaign name" id="Google-Campaign-Name" autocomplete="off">
        </div>
      </div>
      <div class="form-row my-2">
        <div class="col">
          <input type="text" class="form-control" placeholder="Campaign term" id="Google-Campaign-Term" autocomplete="off">
        </div>
      </div>
      <div class="form-row my-2">
        <div class="col">
          <input type="text" class="form-control" placeholder="Campaign source" id="Google-Campaign-Source" autocomplete="off">
        </div>
      </div>
      <div class="form-row my-2">
        <div class="col">
          <input type="text" class="form-control" placeholder="Campaign medium" id="Google-Campaign-Medium" autocomplete="off">
        </div>
      </div>
      <div class="form-row my-2">
        <div class="col">
          <input type="text" class="form-control" placeholder="Campaign content" id="Google-Campaign-Content" autocomplete="off">
        </div>
      </div>
      <div class="form-row my-2">
        <div class="col">
          <a class="btn btn-primary mt-1 text-white" onclick="CreateGoogleURL()">Generate URL</a>
          <a class="btn btn-secondary mt-1 text-white" onclick="ClearGoogleURL()">Clear</a>
          <!-- <a class="btn btn-secondary mt-1" onclick="CopyToClipboard()"><i class="far fa-copy"></i> Copy to Clipboard</a> -->
        </div>
      </div>
      <div class="form-row my-2">
        <div class="col">
          <input type="text" class="form-control" placeholder="" id="Google-Tracking-URL-Output" autocomplete="off">
        </div>
      </div>
    </form>
  </div>
</div>

<!-- CreateGoogleRL Script -->

<script type="text/JavaScript">
function CreateGoogleURL(){
  var GoogleWebsiteURL = document.getElementById('Google-Website-URL').value;
  var GoogleCampaignName = "?utm_campaign=" + document.getElementById('Google-Campaign-Name').value;
  var GoogleCampaignTerm = "&utm_term=" + document.getElementById('Google-Campaign-Term').value;
  var GoogleCampaignSource = "&utm_source=" + document.getElementById('Google-Campaign-Source').value;
  var GoogleCampaignMedium = "&utm_medium=" + document.getElementById('Google-Campaign-Medium').value;
  var GoogleCampaignContent = "&utm_content=" + document.getElementById('Google-Campaign-Content').value;
  var GoogleTrackingURL = GoogleWebsiteURL + GoogleCampaignName + GoogleCampaignTerm + GoogleCampaignSource + GoogleCampaignMedium + GoogleCampaignContent;
  document.getElementById('Google-Tracking-URL-Output').value = GoogleTrackingURL;
}

function ClearGoogleURL(){
  document.getElementById('Google-Website-URL').value = "";
  document.getElementById('Google-Campaign-Name').value = "";
  document.getElementById('Google-Campaign-Term').value ="";
  document.getElementById('Google-Campaign-Source').value = "";
  document.getElementById('Google-Campaign-Medium').value = "";
  document.getElementById('Google-Campaign-Content').value = "";
  document.getElementById('Google-Tracking-URL-Output').value = "";
}
</script>
