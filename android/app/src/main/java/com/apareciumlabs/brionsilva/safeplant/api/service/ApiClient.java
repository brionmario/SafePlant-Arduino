package com.apareciumlabs.brionsilva.safeplant.api.service;

import com.apareciumlabs.brionsilva.safeplant.api.models.BloodPressure;
import com.apareciumlabs.brionsilva.safeplant.api.models.HeartRate;

import retrofit2.Call;
import retrofit2.http.Body;
import retrofit2.http.POST;

/**
 * Copyright (c) 2017. Aparecium Labs.  http://www.apareciumlabs.com
 *
 * @author brionsilva
 * @version 1.0
 * @since 29/10/2017
 */
public interface ApiClient {

    @POST("heartrates")
    Call<HeartRate> sendHeartRate(@Body HeartRate heartRate);

    @POST("bloodpressures")
    Call<BloodPressure> sendHeartRate(@Body BloodPressure bloodPressure);
}
