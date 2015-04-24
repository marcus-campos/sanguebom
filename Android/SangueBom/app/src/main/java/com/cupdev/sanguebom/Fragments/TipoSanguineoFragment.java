package com.cupdev.sanguebom.Fragments;


import android.app.ListActivity;
import android.os.Bundle;
import android.app.Fragment;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.AdapterView;

import android.view.View;
import android.widget.AdapterView;
import android.widget.AdapterView.OnItemSelectedListener;
import android.widget.ArrayAdapter;
import android.widget.Spinner;
import android.widget.Toast;

import com.cupdev.sanguebom.R;

import java.util.ArrayList;
import java.util.List;

/**
 * A simple {@link Fragment} subclass.
 */
public class TipoSanguineoFragment extends Fragment {

    private Spinner tSanguineo;

    public TipoSanguineoFragment() {
        // Required empty public constructor
    }

    @Override
    public View onCreateView(LayoutInflater inflater, ViewGroup container,
                             Bundle savedInstanceState) {


        View rootView = inflater.inflate(R.layout.fragment_tipo_sanguineo, container, false);

        tSanguineo = (Spinner) getActivity().findViewById(R.id.spinTipoSanguineo);
        List<String> list = new ArrayList<String>();
        list.add("A+");
        list.add("A-");
        list.add("B+");
        list.add("B-");
        list.add("AB+");
        list.add("AB-");
        list.add("O+");
        list.add("O-");
        ArrayAdapter<String> dataAdapter = new ArrayAdapter<String>(getActivity(),android.R.layout.simple_spinner_item, list);
        dataAdapter.setDropDownViewResource(android.R.layout.simple_spinner_dropdown_item);
        tSanguineo.setAdapter(dataAdapter);

        return rootView;

    }


}
