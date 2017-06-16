package com.example.gualberto.cetis108app005;

import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;

public class Tema_lista_activity extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_temas);
    }
    public void nuevoTema4(View v) {
        Intent Continuar2 = new Intent (this, Tema_tipo.class);
        startActivity(Continuar2);
    }
}
