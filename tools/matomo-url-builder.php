<div class="card my-2" id="Matomo-URL-Builder">
  <div class="card-body">
    <h2 class="card-title">Matomo URL Builder</h2>
    <h6 class="card-subtitle text-muted">Create you Tracking URLs for Matomo</h3>
    <form class="text-white">
      <div class="form-row my-2">
        <div class="col">
          <input type="text" class="form-control" placeholder="Website URL" id="Matomo-Website-URL" autocomplete="off">
        </div>
      </div>
      <div class="form-row my-2">
        <div class="col">
          <input type="text" class="form-control" placeholder="Campaign name" id="Matomo-Campaign-Name" autocomplete="off">
        </div>
      </div>
      <div class="form-row my-2">
        <div class="col">
          <input type="text" class="form-control" placeholder="Campaign keyword" id="Matomo-Campaign-Keyword" autocomplete="off">
        </div>
      </div>
      <div class="form-row my-2">
        <div class="col">
          <input type="text" class="form-control" placeholder="Campaign source" id="Matomo-Campaign-Source" autocomplete="off">
        </div>
      </div>
      <div class="form-row my-2">
        <div class="col">
          <input type="text" class="form-control" placeholder="Campaign medium" id="Matomo-Campaign-Medium" autocomplete="off">
        </div>
      </div>
      <div class="form-row my-2">
        <div class="col">
          <input type="text" class="form-control" placeholder="Campaign content" id="Matomo-Campaign-Content" autocomplete="off">
        </div>
      </div>
      <div class="form-row my-2">
        <div class="col">
          <a class="btn btn-primary mt-1" onclick="CreateMatomoURL()">Generate URL</a>
          <a class="btn btn-secondary mt-1" onclick="ClearMatomoURL()">Clear</a>
          <!-- <a class="btn btn-secondary mt-1" onclick="CopyToClipboard()"><i class="far fa-copy"></i> Copy to Clipboard</a> -->
        </div>
      </div>
      <div class="form-row my-2">
        <div class="col">
          <input type="text" class="form-control" placeholder="" id="Matomo-Tracking-URL-Output" disabled>
        </div>
      </div>
    </form>
  </div>
</div>

<!-- CreateMatomoURL Script -->

<script type="text/JavaScript">
function CreateMatomoURL(){
  var MatomoWebsiteURL = document.getElementById('Matomo-Website-URL').value;
  var MatomoCampaignName = "?pk_campaign=" + document.getElementById('Matomo-Campaign-Name').value;
  var MatomoCampaignKeyword = "&pk_kwd=" + document.getElementById('Matomo-Campaign-Keyword').value;
  var MatomoCampaignSource = "&pk_source=" + document.getElementById('Matomo-Campaign-Source').value;
  var MatomoCampaignMedium = "&pk_medium=" + document.getElementById('Matomo-Campaign-Medium').value;
  var MatomoCampaignContent = "&pk_content=" + document.getElementById('Matomo-Campaign-Content').value;
  var MatomoTrackingURL = MatomoWebsiteURL + MatomoCampaignName + MatomoCampaignKeyword + MatomoCampaignSource + MatomoCampaignMedium + MatomoCampaignContent;
  document.getElementById('Matomo-Tracking-URL-Output').value = MatomoTrackingURL;
}

function ClearMatomoURL(){
  document.getElementById('Matomo-Website-URL').value = "";
  document.getElementById('Matomo-Campaign-Name').value = "";
  document.getElementById('Matomo-Campaign-Keyword').value ="";
  document.getElementById('Matomo-Campaign-Source').value = "";
  document.getElementById('Matomo-Campaign-Medium').value = "";
  document.getElementById('Matomo-Campaign-Content').value = "";
  document.getElementById('Matomo-Tracking-URL-Output').value = "";
}
</script>
