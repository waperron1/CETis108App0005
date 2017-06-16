package com.example.gualberto.cetis108app005;

import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;

public class MainActivity extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
    }
    public void nuevoTema(View v) {
        Intent Continuar = new Intent (this, Temas.class);
        startActivity(Continuar);
    }
    public void nuevoTema2(View v) {
        Intent Continuar2 = new Intent (this, Nuevo.class);
        startActivity(Continuar2);
    }


}
