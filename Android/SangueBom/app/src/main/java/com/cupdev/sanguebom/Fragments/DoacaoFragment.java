package com.cupdev.sanguebom.Fragments;


import android.os.Bundle;
import android.app.Fragment;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;

import com.cupdev.sanguebom.R;

/**
 * A simple {@link Fragment} subclass.
 */
public class DoacaoFragment extends Fragment {


    public DoacaoFragment() {
        // Required empty public constructor
    }


    @Override
    public View onCreateView(LayoutInflater inflater, ViewGroup container,
                             Bundle savedInstanceState) {
        View rootView = inflater.inflate(R.layout.fragment_doacao, container, false);
        return rootView;
    }


}
