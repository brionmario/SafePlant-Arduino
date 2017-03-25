package com.apareciumlabs.brionsilva.safeplant;

import android.content.Intent;
import android.graphics.Typeface;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.text.method.PasswordTransformationMethod;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.TextView;

public class loginScreen extends AppCompatActivity {

    EditText username, password;
    TextView loginError;
    Button loginButton;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_login_screen);

        //initializing the textfields and buttons
        username = (EditText) findViewById(R.id.login_username);
        password = (EditText) findViewById(R.id.login_password);
        loginError = (TextView) findViewById(R.id.login_error_text);
        loginButton = (Button) findViewById(R.id.login_button);


        //setting the password font to default
        password.setTypeface(Typeface.DEFAULT);
        password.setTransformationMethod(new PasswordTransformationMethod());

        loginButton.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {

                /*if(username.getText().toString().equals("admin") &&
                        password.getText().toString().equals("admin")) {
                    Toast.makeText(getApplicationContext(),
                            "Redirecting...",Toast.LENGTH_SHORT).show();
                    Intent intent = new Intent(getBaseContext(),
                            homeScreen.class);
                    startActivity(intent);
                }else{

                    loginError.setText("Invalid username & password");

                }*/
                Intent intent = new Intent(getBaseContext(),
                        Bluetooth.class);
                startActivity(intent);

            }
        });

    }

}