package com.example.gualberto.cetis108app005;

import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;

public class Categorias_tipo_Activity extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_categorias_tipo_);
    }
    public void nuevoTema5(View v) {
        Intent Continuar2 = new Intent (this, Tema_lista_activity.class);
        startActivity(Continuar2);
    }
}
