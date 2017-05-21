package com.apareciumlabs.brionsilva.safeplant;

import android.content.Intent;
import android.os.Bundle;
import android.support.design.widget.FloatingActionButton;
import android.support.design.widget.Snackbar;
import android.support.v4.app.FragmentManager;
import android.support.v4.app.FragmentTransaction;
import android.view.View;
import android.support.design.widget.NavigationView;
import android.support.v4.view.GravityCompat;
import android.support.v4.widget.DrawerLayout;
import android.support.v7.app.ActionBarDrawerToggle;
import android.support.v7.app.AppCompatActivity;
import android.support.v7.widget.Toolbar;
import android.view.Menu;
import android.view.MenuItem;
import android.widget.Toast;

public class HomeScreen extends AppCompatActivity
        implements NavigationView.OnNavigationItemSelectedListener {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_home_screen);

        //default fragment (Home fragment)
        FragmentTransaction tx = getSupportFragmentManager().beginTransaction();
        tx.replace(R.id.relativelayout_for_fragment, new HomeFragment());
        tx.commit();

        Toolbar toolbar = (Toolbar) findViewById(R.id.toolbar);
        setSupportActionBar(toolbar);

        /*FloatingActionButton fab = (FloatingActionButton) findViewById(R.id.fab);
        fab.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                Snackbar.make(view, "Replace with your own action", Snackbar.LENGTH_LONG)
                        .setAction("Action", null).show();
            }
        });*/

        DrawerLayout drawer = (DrawerLayout) findViewById(R.id.drawer_layout);
        ActionBarDrawerToggle toggle = new ActionBarDrawerToggle(
                this, drawer, toolbar, R.string.navigation_drawer_open, R.string.navigation_drawer_close);
        drawer.setDrawerListener(toggle);
        toggle.syncState();

        NavigationView navigationView = (NavigationView) findViewById(R.id.nav_view);
        navigationView.setNavigationItemSelectedListener(this);
    }

    @Override
    public void onBackPressed() {
        DrawerLayout drawer = (DrawerLayout) findViewById(R.id.drawer_layout);
        if (drawer.isDrawerOpen(GravityCompat.START)) {
            drawer.closeDrawer(GravityCompat.START);
        } else {
            super.onBackPressed();
        }
    }

    @Override
    public boolean onCreateOptionsMenu(Menu menu) {
        // Inflate the menu; this adds items to the action bar if it is present.
        getMenuInflater().inflate(R.menu.home_screen, menu);
        return true;
    }

    @Override
    public boolean onOptionsItemSelected(MenuItem item) {
        // Handle action bar item clicks here. The action bar will
        // automatically handle clicks on the Home/Up button, so long
        // as you specify a parent activity in AndroidManifest.xml.
        int id = item.getItemId();

        //noinspection SimplifiableIfStatement
        if (id == R.id.action_settings) {
            return true;
        }

        return super.onOptionsItemSelected(item);
    }

    @SuppressWarnings("StatementWithEmptyBody")
    @Override
    public boolean onNavigationItemSelected(MenuItem item) {
        // Handle navigation view item clicks here.
        int id = item.getItemId();

        if (id == R.id.nav_home) {
            //Toast.makeText(getApplicationContext(),"You clicked Home",Toast.LENGTH_SHORT).show();

            HomeFragment homeFragment = new HomeFragment();
            FragmentManager fragmentManager = getSupportFragmentManager();
            fragmentManager.beginTransaction().replace(R.id.relativelayout_for_fragment,
                    homeFragment,
                    homeFragment.getTag()).commit();

        }else if (id == R.id.nav_scheduler) {
            //Toast.makeText(getApplicationContext(),"You clicked Scheduler",Toast.LENGTH_SHORT).show();

            SchedulerFragment schedulerFragment = new SchedulerFragment();
            FragmentManager fragmentManager = getSupportFragmentManager();
            fragmentManager.beginTransaction().replace(R.id.relativelayout_for_fragment,
                    schedulerFragment,
                    schedulerFragment.getTag()).commit();

        } else if (id == R.id.nav_mySchedule) {
            Toast.makeText(getApplicationContext(),"You clicked MySchedule",Toast.LENGTH_SHORT).show();
        }else if (id == R.id.nav_askQuestion) {
            Toast.makeText(getApplicationContext(),"You clicked Question",Toast.LENGTH_SHORT).show();
        } else if (id == R.id.nav_feedback) {
            Toast.makeText(getApplicationContext(),"You clicked Feedback",Toast.LENGTH_SHORT).show();
        }else if (id == R.id.nav_tips) {
            Toast.makeText(getApplicationContext(),"You clicked Tips",Toast.LENGTH_SHORT).show();
        }else if (id == R.id.nav_changeAccount) {
            Toast.makeText(getApplicationContext(),"You clicked Change Account",Toast.LENGTH_SHORT).show();
        }else if (id == R.id.nav_donate) {
            Toast.makeText(getApplicationContext(),"You clicked Donate",Toast.LENGTH_SHORT).show();
        }else if (id == R.id.nav_about) {
            //Toast.makeText(getApplicationContext(),"You clicked About",Toast.LENGTH_SHORT).show();

            AboutFragment schedulerFragment = new AboutFragment();
            FragmentManager fragmentManager = getSupportFragmentManager();
            fragmentManager.beginTransaction().replace(R.id.relativelayout_for_fragment,
                    schedulerFragment,
                    schedulerFragment.getTag()).commit();
        }else if (id == R.id.nav_contact) {
            //Toast.makeText(getApplicationContext(),"You clicked Contact",Toast.LENGTH_SHORT).show();

            ContactFragment schedulerFragment = new ContactFragment();
            FragmentManager fragmentManager = getSupportFragmentManager();
            fragmentManager.beginTransaction().replace(R.id.relativelayout_for_fragment,
                    schedulerFragment,
                    schedulerFragment.getTag()).commit();
        }

        DrawerLayout drawer = (DrawerLayout) findViewById(R.id.drawer_layout);
        drawer.closeDrawer(GravityCompat.START);
        return true;
    }
}
