<?php require_once('header.php'); ?>
<div class="section-custom-light">
    <div class="container gallery-project">
        <div class="row">
            <div class="col-md-8">
                <img src="/images/avoice/3.png" />
            </div>
            <div class="col-md-4 section-hook">
                <h1>
                    <small>windows 8</small>
                    aVoice
                </h1>
                <h4>
                    <em>
                        <a href="http://apps.microsoft.com/windows/app/avoice/e1cd9093-ab4e-4f57-9526-15c5e9fdba51" target="_blank">Windows Store</a>
                    </em>
                </h4>
                <p>
                    A <a href="https://support.google.com/voice/answer/115061?hl=en" target="_blank">Google Voice</a> client
                    that keeps you updated at a glance.
                </p>
                <p>
                    Built with the
                    <a href="http://en.wikipedia.org/wiki/Model_View_ViewModel" target="_blank">MVVM paradigm</a>
                    in XAML/C#. Accompanied by an
                    <a href="http://channel9.msdn.com/Series/Windows-Azure-Cloud-Services-Tutorials/Introduction-to-Windows-Azure-Worker-Roles-Part-1" target="_blank">Azure
                    worker role</a> for push notifications from the cloud.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <img src="/images/avoice/valuemapping.png" />
            </div>
            <div class="col-md-4">
                <h2>Priorities</h2>
                <p>
                    Google Voice has nearly the feature set of an email client. Working alone, there was no way I could
                    implement everything. After researching support forums and talking to other users, I used the
                    value-mapping technique to figure out where to focus first.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <img src="/images/avoice/sketches.png" />
            </div>
            <div class="col-md-4">
                <p>
                    <em>
                        Concepts of the P1 features.
                    </em>
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <img src="/images/avoice/1.png" />
            </div>
            <div class="col-md-4">
                <p>
                    <em>
                        An MRU list of messages makes it hard to distinguish active conversations from stale ones.
                        Grouping by the day of the last message separates content from history. I use color to
                        indicate whether you or the other contact sent the last message.
                    </em>
                </p>
                <p>
                    <em>
                        A similar concept was explored by
                        <a href="http://apps.microsoft.com/windows/en-us/app/touchmail/be8bb8da-15eb-49dd-9073-552201dc0a75" target="_blank">TouchMail</a>.
                    </em>
                </p>
            </div>
        </div>
    </div>
</div>
<?php require_once('footer.php'); ?>