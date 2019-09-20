package com.example.android.ooops;

import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.webkit.WebView;
import android.webkit.WebViewClient;

public class MainActivity extends AppCompatActivity {

    private WebView web;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        web=(WebView)findViewById(R.id.web);
        web.getSettings().setJavaScriptEnabled(true);
        web.getSettings().setAppCacheEnabled(true);
        web.setWebViewClient(new WebViewClient());
        web.loadUrl("http://192.168.43.245/voltgenic/login.php");
    }
}
