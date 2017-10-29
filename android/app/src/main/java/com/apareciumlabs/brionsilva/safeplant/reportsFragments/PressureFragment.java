package com.apareciumlabs.brionsilva.safeplant.reportsFragments;


import android.os.Bundle;
import android.support.v4.app.Fragment;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;

import com.apareciumlabs.brionsilva.safeplant.R;

/**
 * A simple {@link Fragment} subclass.
 */
public class PressureFragment extends Fragment {


    public PressureFragment() {
        // Required empty public constructor
    }


    @Override
    public View onCreateView(LayoutInflater inflater, ViewGroup container,
                             Bundle savedInstanceState) {
        // Inflate the layout for this fragment
        View view = inflater.inflate(R.layout.fragment_pressure, container, false);

        return view;
    }

}
